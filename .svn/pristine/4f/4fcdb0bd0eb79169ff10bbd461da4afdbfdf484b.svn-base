<?php
namespace AppBundle\DAO;

use AppBundle\Model\Option;
use \PDO;
/**
 *
 * @author ngbamaw
 *        
 */
class DAOOption implements iDAO{

    /**
     */
    
    private $_bdd;
    
    function __construct(){
        $this->_bdd = DatabaseConnectionSingleton::getInstance();
    }
    
    /**
     * Creates a new record
     * @param Object $object
     *
     */
    public function create($object){
        $done = FALSE;
        try {
            $req = 'INSERT INTO Option (wording)
                        VALUES (:wording)';
            $statement = $this->_bdd->prepare($req);
            $params = array(
                ':wording' => $object->getWording()
            );
            $statement->execute($params);
            $done = TRUE;
        } catch (PDOException $e) {
            echo "Erreur durant la création d'une Option: " . $e->getMessage();
        }
        return $done;
    }
    
    /**
     * Reads a record
     * @param mixed $id
     */
    public function read($id){
        $res = NULL;
        try {
            $req='SELECT wording FROM Option WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':id' => $id));
            $obj = $statement->fetch(PDO::FETCH_OBJ);
            $res = new Option(
                $id,
                $obj->wording
            );
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une Option: " . $e->getMessage();
        }
        return $res;
    }

    /**
     * Reads a record
     * @param mixed $id
     */
    public function readByName($name){
        $res = NULL;
        try {
            $req = 'SELECT id FROM Option WHERE wording = :wording';
            $statement = $this->_bdd->prepare($req);
            $statement->bindValue(':wording',$name);
            $statement->execute();
            if ($obj = $statement->fetch(PDO::FETCH_OBJ)){
                $res = new Option(
                    $obj->id,
                    $name
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une Option: " . $e->getMessage();
        }
        return $res;
    }

    /**
     * Reads all records
     * @return array Array of objects
     */
    public function readAll(){
        $res = NULL;
        try {
            $res = array();
            $req='SELECT id, wording FROM `Option`';
            $prep = $this->_bdd->prepare($req);
            $prep->execute();
            while($obj = $prep->fetch(PDO::FETCH_OBJ)){
                $res[] = new Option(
                    $obj->id,
                    $obj->wording
                    );
                
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'une Option: " . $e->getMessage();
        }

        return $res;
    }
    /**
     * Updates a record
     * @param Object $object
     */
    public function update($object){
        $done = FALSE;
        try {
            $req='UPDATE Option';
            $req .= ' SET wording = :wording';
            $req .= ' WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $params = array(
                ':id' => $object->getId(),
                ':wording' => $object->getWording()
            );
            $statement->execute($params);
            $done = TRUE;
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'une Option: " . $e->getMessage();
        }
        return $done;
    }
    /**
     * Deletes a record
     * @param mixed $id
     */
    public function delete($id){
        $done = FALSE;
        try {
            $req='DELETE FROM Option WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $params = array(
                ':id' => $id
            );
            $statement->execute($params);
            $done = TRUE;
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'une Option: " . $e->getMessage();
        }
        return $done;
    }
    
}

