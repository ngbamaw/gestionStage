<?php
namespace AppBundle\DAO;

include_once ('iDAO.php');
use AppBundle\DAO\DatabaseConnectionSingleton;
use AppBundle\Model\Tuteur;
use \PDO;

class DAOTuteur implements iDAO{

    private $connect;

    function __construct(){
        $this->connect = DatabaseConnectionSingleton::getInstance();

    }

    public function read($id){
        $res = NULL;
        try {
            $req='SELECT id,lastname,firstname,mail,phone_number,id_Company,function FROM Internship_Tutor WHERE id = :id';
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':id' => $id));

            if ($obj = $statement->fetch(PDO::FETCH_OBJ)){
                $res =  new Tuteur(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->phone_number,
                    $obj->id_Company,
                    $obj->function
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un tuteur: " . $e->getMessage();
        }
        return $res;
    }

    public function create($object){
        $done = FALSE;
        try {
            $req = 'INSERT INTO Internship_Tutor (lastname,firstname,mail,phone_number, id_Company, function)';
            $req.= ' VALUES (:lname, :fname, :mail, :phone, :id_company, :function)';

            $statement = $this->connect->prepare($req);
            $params = array(
                ':lname' => $object->getLastname(),
                ':fname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':phone' => $object->getPhoneNumber(),
                ':id_company' => $object->getIdCompany(),
                ':function' => $object->getFunction()
            );
            $done = $statement->execute($params);

        } catch (PDOException $e) {
            echo "Erreur durant la création d'un Tuteur: " . $e->getMessage();
        }
        return $done;
    }
    public function update($object)
    {
        $done = FALSE;
        try {
            $req='UPDATE Internship_Tutor';
            $req .= ' SET lastname = :lname, firstname = :fname, mail = :mail, phone_number=:phone';
            $req .= ' WHERE id = :id';
            $statement = $this->connect->prepare($req);
            $params = array(
                ':lname' => $object->getLastname(),
                ':fname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':phone' => $object->getPhoneNumber(),
                ':id_company' => $object->getIdCompany(),
                ':function' => $object->getFunction()
            );
            $done = $statement->execute($params);
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'un Tuteur: " . $e->getMessage();
        }
        return $done;
    }

    public function delete($id)
    {		$done = FALSE;
        try {
            $req='DELETE FROM Internship_Tutor WHERE id = :id';
            $statement = $this->connect->prepare($req);
            $done = $statement->execute(array(':id' => $id));
        } catch (PDOException $e) {
            echo "Erreur durant la suppression d'un Tuteur: " . $e->getMessage();
        }
        return $done;
    }


    public function readAll(){
        $res = [];
        try {
            $res = array();
            $req='SELECT id,lastname,firstname,mail,phone_number,id_Company,function FROM Internship_Tutor';
            $rows = $this->connect->query($req);
            while($obj = $rows->fetch(PDO::FETCH_OBJ)){
                $res = new Tuteur(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->phone_number,
                    $obj->id_Company,
                    $obj->function
                );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture de tous les tuteurs: " . $e->getMessage();
        }
        return $res;
    }
    /*--Oui--*/
    public function readbyCompany($id){
        $res = [];
        try {
            $req='SELECT * FROM Internship_Tutor INNER JOIN Company ON Company.id=Internship_Tutor.id_company WHERE Internship_Tutor.id_Company=:id LIMIT 1';
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':id' => $id));
            while ($obj = $statement->fetch(PDO::FETCH_OBJ)) {
                $res = new Tuteur(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->phone_number,
                    $obj->id_Company,
                    $obj->function
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un tuteur: " . $e->getMessage();
        }
        return $res;
    }
}
    
    