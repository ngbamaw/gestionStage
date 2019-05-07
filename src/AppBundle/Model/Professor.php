<?php
namespace AppBundle\Model;

use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class Professor extends User {

    /**
     * Professor constructor.
     * @param null $id
     * @param null $lastname
     * @param null $firstname
     * @param null $mail
     * @param null $phone_number
     * @param null $password
     * @param null $plainPassword
     */
    public function __construct($id = null, $lastname = null, $firstname = null, $mail = null, $phone_number = null, $password = null, $plainPassword = null)
    {
        parent::__construct($id, $lastname, $firstname, $mail, $phone_number, $password, $plainPassword);
    }

    public function getRoles()
    {
        return ['ROLE_ADMIN', 'ROLE_USER'];
    }
}
