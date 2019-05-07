<?php  
namespace AppBundle\Model;

class Company{
    private $_id;
    private $_name;
    private $_address;
    private $_postal_code;
    private $_phone_number;
    private $_town;
    private $_category;
    
    
  
    public function __construct($id,$name,$adress,$postal_code,$phone_number,$town,$category){
        $this->_id=$id;
        $this->_name=$name;
        $this->_address=$adress;
        $this->_postal_code=$postal_code;
        $this->_phone_number=$phone_number;
        $this->_town=$town;
        $this->_category=$category;
        
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * @return mixed
     */
    public function getPostal_code()
    {
        return $this->_postal_code;
    }

    /**
     * @return mixed
     */
    public function getPhone_number()
    {
        return $this->_phone_number;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->_town;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param string $_name
     */
    public function setName($_name)
    {
        $this->_name = $_name;
    }

    /**
     * @param mixed $_address
     */
    public function setAddress($_address)
    {
        $this->_address = $_address;
    }

    /**
     * @param mixed $_postal_code
     */
    public function setPostal_code($_postal_code)
    {
        $this->_postal_code = $_postal_code;
    }

    /**
     * @param mixed $_phone_number
     */
    public function setPhone_number($_phone_number)
    {
        $this->_phone_number = $_phone_number;
    }

    /**
     * @param mixed $_town
     */
    public function setTown($_town)
    {
        $this->_town = $_town;
    }

    /**
     * @param mixed $_category
     */
    public function setCategory($_category)
    {
        $this->_category = $_category;
    }

    
    
    
    
    
    
}











?>