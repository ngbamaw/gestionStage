<?php


namespace AppBundle\Service;


use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\Model\Etudiant;
use AppBundle\Model\Professor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorBuilderInterface;
use Twig\Node\Expression\ConstantExpression;

class EtudiantHandler
{
    private $dao;
    private $passwordEncoder;
    private $request;
    private $security;

    public function __construct(DAOEtudiant $dao, PasswordEncoder $passwordEncoder, RequestStack $requestStack, Security $security)
    {
        $this->dao = $dao;
        $this->passwordEncoder = $passwordEncoder;
        $this->request = $requestStack->getCurrentRequest();
        $this->security = $security;
    }

    public function createEtudiant(Etudiant $etudiant)
    {
        $password = $this->passwordEncoder->encodePassword($etudiant->getPlainPassword());
        $etudiant->setPassword($password);
        $etudiant->eraseCredentials();

        $this->dao->create($etudiant);
    }

    public function updateEtudiant(Etudiant $etudiant)
    {

        $this->dao->update($etudiant);
        if ($etudiant->getPlainPassword() != "") {
            $password = $this->passwordEncoder->encodePassword($etudiant->getPlainPassword());
            $etudiant->setPassword($password);
            $etudiant->eraseCredentials();
            $this->dao->updatePassword($etudiant->getId(), $etudiant->getPassword());
        }

    }

    public function isValidPasswordAdmin()
    {
        if ($this->passwordEncoder->isPasswordValid($this->security->getUser()->getPassword(), $this->request->request->get('password-admin'))) {
            return true;
        }

        return false;
    }

    public function isValidForUpdate(FormErrorIterator $errors)
    {
        if (count($errors) > 1) {
            return false;
        } else if (count($errors) == 1) {
            $constraint = $errors->current()->getCause();
            return $constraint->getPropertyPath() == 'data._plainPassword' && $constraint->getConstraint() instanceof NotBlank;
        } else if (count($errors) == 0) {
            return true;
        }

        return false;
    }
}
