<?php
namespace AppBundle\DAO;

use AppBundle\DAO\iDAO;
use AppBundle\Model\Stage;

class DAOStage implements iDAO{
    private $co;
    
    function __construct(){
        $this->co = DatabaseConnectionSingleton::getInstance();
        
    }
    /**
     * Creates a new record
     * @param boolean $res
     *
     */
    public function create($object) {
        $done = FALSE;
        try {
            $req='INSERT INTO internship(id, id_Company, id_Student, date_debut, date_fin, convention) 
                  VALUES (null, :id_Company, :id_Student, :date_debut, :date_fin, :convention)';
            $statement = $this->co->prepare($req);
            $params = array(
                ':id_Company' => $object->getId_Company(),
                'id_Student' => $object->getId_Student(),
                'date_debut' => $object->getDate_debut(),
                'date_fin' => $object->getDate_fin(),
                'convention' => $object->getConvention()
            );
            $done = $statement->execute($params);
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un stage: " . $e->getMessage();
        }

        return $done;

    }
    
    /**
     * Reads a record
     * @param String $id
     */
    public function read($id) {
    $res = NULL;
    try {
        $req='SELECT id,id_Company,id_Student,date_debut,date_fin, convention FROM Internship Where id= :id';
        $statement = $this->co->prepare($req);
        $statement->execute(array(':id' => $id));
        $obj = $statement->fetch(PDO::FETCH_OBJ);
        $res = new Stage(
            $obj->id_Company,
            $obj->id_Student,
            $obj->date_debut,
            $obj->date_fin,
            $obj->convention
            );
    } catch (PDOException $e) {
        echo "Erreur durant la lecture d'un stage: " . $e->getMessage();
    }
    return $res;
}

    /**
     * Reads all records
     * @return Stage[] $res
     */
    public function readAll() {
    $res = NULL;
    try {
        $req='SELECT id,id_Company,id_Student,date_debut,date_fin, convention FROM Internship ';
        $statement = $this->co->prepare($req);
        $statement->execute();
        while($obj = $statement->fetch(\PDO::FETCH_OBJ)){
            $res[] = new Stage(
                $obj->id,
                $obj->id_Company,
                $obj->id_Student,
                $obj->date_debut,
                $obj->date_fin,
                $obj->convention
                );
        }
    } catch (PDOException $e) {
        echo "Erreur durant la lecture d'un stage: " . $e->getMessage();
    }
    return $res;
}

    /**
     * Updates a record
     * @param boolean $done
     */
    public function update($object){
        $done = FALSE;
        try {
            $req='UPDATE Internship';
            $req .= ' SET id_Company = :id_Company, id_Student = :id_Student, date_debut = :date_debut, date_fin=:date_fin, convention=:convention';
            $req .= ' WHERE id = :id';
            $statement = $this->co->prepare($req);
            $params = array(
                ':id' => $object->getId(),
                ':id_Company' => $object->getId_Company(),
                'id_Student' => $object->getId_Student(),
                'date_debut' => $object->getDate_debut(),
                'date_fin' => $object->getDate_fin(),
                'convention' => $object->getConvention()
            );
            $done = $statement->execute($params);
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'un Etudiant: " . $e->getMessage();
        }
        return $done;
    }

    /**
     * Deletes a record
     * @param String $done
     */
    public function delete($id){
        $done = FALSE;
        try {
            $req='DELETE FROM Internship WHERE id = :id';
            $statement = $this->co->prepare($req);
            $done = $statement->execute(array(':id' => $id));
        } catch (PDOException $e) {
            echo "Erreur durant la suppression d'un Stage: " . $e->getMessage();
        }
        return $done;
        
    }
}