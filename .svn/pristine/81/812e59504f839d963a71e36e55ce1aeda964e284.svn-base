<?php

namespace AppBundle\Model;


use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @author ngbamaw
 *
 */
class User implements UserInterface, EncoderAwareInterface
{

    protected $_id;
    /**
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @Assert\Regex(pattern="/^[a-zA-Z\-]+$/", htmlPattern="/^0[1-8][0-9]{8}$/", message="Prénom invalide")
     */
    protected $_lastname;
    /**
     * @Assert\NotBlank(message="Le prénom est obligatoire")
     * @Assert\Regex(pattern="/^[a-zA-Z\-]+$/", htmlPattern="/^0[1-8][0-9]{8}$/", message="Prénom invalide")
     */
    protected $_firstname;
    /**
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Email
     */
    protected $_mail;
    /**
     * @Assert\NotBlank(message="Le numéro est obligatoire")
     * @Assert\Regex(pattern="/^0[1-8][0-9]{8}$/", htmlPattern="/^0[1-8][0-9]{8}$/", message="Numéro de téléphone invalide")
     */
    protected $_phone_number;
    /**
     * @Assert\NotBlank(message="Le mot de passe est obligatoire")
     * @Assert\Length(min=8, minMessage="Le mot de passe doit contenir au moins 8 caratères")
     * @Assert\Regex(pattern="/[A-Z]/", htmlPattern="/[A-Z]/", message="Le mot de passe doit contenir au moins une lettre majuscule")
     * @Assert\Regex(pattern="/[a-z]/", htmlPattern="/[a-z]/", message="Le mot de passe doit contenir au moins une lettre minuscule")
     * @Assert\Regex(pattern="/\d/", htmlPattern="/\d/", message="Le mot de passe doit contenir au moins un chiffre")
     * @Assert\Regex(pattern="/[-+!*$@%_]/", htmlPattern="/[-+!*$@%_]/", message="Le mot de passe doit contenir au moins un de ces caractères spéciaux : $ @ % * + - _ !")
     */
    protected $_plainPassword;
    protected $_password;

    /**
     * User constructor.
     * @param $id
     * @param $lastname
     * @param $firstname
     * @param $mail
     * @param $phone_number
     * @param $password
     * @param null $plainPassword
     */
    public function __construct($id, $lastname, $firstname, $mail, $phone_number, $password, $plainPassword = null)
    {
        $this->_id = $id;
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_mail = $mail;
        $this->_phone_number = $phone_number;
        $this->_password = $password;
        $this->_plainPassword = $plainPassword;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->_phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->_phone_number = $phone_number;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;// TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->_mail;// TODO: Implement getUsername() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        $this->_plainPassword = null;
    }

    /**
     * Gets the name of the encoder used to encode the password.
     *
     * If the method returns null, the standard way to retrieve the encoder
     * will be used instead.
     *
     * @return string
     */
    public function getEncoderName()
    {
        return 'app_encoder';
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return null
     */
    public function getPlainPassword()
    {
        return $this->_plainPassword;
    }

    /**
     * @param null $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->_plainPassword = $plainPassword;
    }
}

