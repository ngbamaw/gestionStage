<?php

namespace AppBundle\Model;

use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class Etudiant
 * @package AppBundle\Model
 */
class Etudiant extends User implements UserInterface, EncoderAwareInterface
{
    private $_address;
    private $_town;
    private $_postal_code;
    private $_id_promotion;
    private $_id_option;
    private $_birthdate;

    /**
     * Etudiant constructor.
     * @param $id
     * @param $lastname
     * @param $firstname
     * @param $mail
     * @param $address
     * @param $town
     * @param $postal_code
     * @param $phone
     * @param $id_promotion
     * @param $id_option
     * @param $birthdate
     * @param $password
     */
    public function __construct($id = null, $lastname = null, $firstname = null, $mail = null, $address = null, $town = null, $postal_code = null, $phone = null, $id_promotion = null, $id_option = null, $birthdate = null, $password = null)
    {
        parent::__construct($id, $lastname, $firstname, $mail, $phone, $password);
        $this->_address = $address;
        $this->_town = $town;
        $this->_postal_code = $postal_code;
        $this->_id_promotion = $id_promotion;
        $this->_id_option = $id_option;
        $this->_birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->_address = $address;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->_town;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->_town = $town;
    }

    /**
     * @return mixed 
     */
    public function getPostalCode()
    {
        return $this->_postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code)
    {
        $this->_postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function getIdPromotion()
    {
        return $this->_id_promotion;
    }

    /**
     * @param mixed $id_promotion
     */
    public function setIdPromotion($id_promotion)
    {
        $this->_id_promotion = $id_promotion;
    }

    /**
     * @return mixed
     */
    public function getIdOption()
    {
        return $this->_id_option;
    }

    /**
     * @param mixed $id_option
     */
    public function setIdOption($id_option)
    {
        $this->_id_option = $id_option;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->_birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }
}
