<?php


namespace AppBundle\Service;


use AppBundle\DAO\DAOProfesseur;
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

class ProfessorHandler
{
    private $dao;
    private $passwordEncoder;
    private $request;
    private $security;

    public function __construct(DAOProfesseur $dao, PasswordEncoder $passwordEncoder, RequestStack $requestStack, Security $security)
    {
        $this->dao = $dao;
        $this->passwordEncoder = $passwordEncoder;
        $this->request = $requestStack->getCurrentRequest();
        $this->security = $security;
    }

    public function createProfessor(Professor $professor)
    {
        $password = $this->passwordEncoder->encodePassword($professor->getPlainPassword());
        $professor->setPassword($password);
        $professor->eraseCredentials();

        $this->dao->create($professor);
    }

    public function updateProfessor(Professor $professor)
    {

        $this->dao->update($professor);
        if ($professor->getPlainPassword() != "") {
            $password = $this->passwordEncoder->encodePassword($professor->getPlainPassword());
            $professor->setPassword($password);
            $professor->eraseCredentials();
            $this->dao->updatePassword($professor);
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
