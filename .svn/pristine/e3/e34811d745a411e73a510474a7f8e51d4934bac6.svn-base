<?php
namespace AppBundle\Model;

class Tuteur implements \JsonSerializable {
    private $id;
    private $lastname;
    private $firstname;
    private $mail;
    private $phone_number;
    private $id_Company;
    private $function;

    /**
     * Tuteur constructor.
     * @param $id
     * @param $lastname
     * @param $firstname
     * @param $mail
     * @param $phone_number
     * @param $id_Company
     * @param $function
     */
    public function __construct($id, $lastname, $firstname, $mail, $phone_number, $id_Company, $function)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->mail = $mail;
        $this->phone_number = $phone_number;
        $this->id_Company = $id_Company;
        $this->function = $function;
    }

    /**
     * @return mixed
     */
    public function getFunction()
    {
        return $this->function;
    }


    /**
     * @return mixed
     */
    public function getIdCompany()
    {
        return $this->id_Company;
    }


    public function jsonSerialize()
    {
        $vars = get_object_vars($this);

        return $vars;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
    /**
     * @return mixed
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * @return mixed
     */
    public function getId_Company()
    {
        return $this->id_Company;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @param mixed $id_Company
     */
    public function setId_Company($id_Company)
    {
        $this->id_Company = $id_Company;
    }

    /**
     * @param mixed $function
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }





}
