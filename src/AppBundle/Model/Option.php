<?php
namespace AppBundle\Model;

/**
 *
 * @author ngbamaw
 *        
 */
class Option
{

    private $_id;
    private $_wording;
    
    /**
     */
    public function __construct($id, $wording){
        $this->_id = $id;
        $this->_wording = $wording;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getWording()
    {
        return $this->_wording;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param mixed $_wording
     */
    public function setWording($_wording)
    {
        $this->_wording = $_wording;
    }

    
    
}

