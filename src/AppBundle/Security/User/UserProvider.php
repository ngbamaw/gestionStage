<?php


namespace AppBundle\Security\User;


use AppBundle\DAO\DAOEtudiant;
use AppBundle\DAO\DAOProfesseur;
use AppBundle\Model\Etudiant;
use AppBundle\Model\Professor;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface
{

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        $daoEtu = new DAOEtudiant();
        $daoProf = new DAOProfesseur();
        $student = $daoEtu->readByMail($username);
        $professor = !$student ? $daoProf->readByMail($username): null;

        if(!$student && !$professor){
            throw new UsernameNotFoundException();
        }

        return $student ? $student : $professor;
    }

    /**
     * Refreshes the user.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the user is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof Etudiant && !$user instanceof Professor) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }else if($user instanceof Etudiant){
            $dao = new DAOEtudiant();
            return $dao->readByMail($user->getUsername());
        }else{
            $dao = new DAOProfesseur();
            return $dao->readByMail($user->getUsername());
        }
    }

    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        return in_array($class, [Etudiant::class, Professor::class]);
    }
}
