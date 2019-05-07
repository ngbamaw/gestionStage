<?php
namespace AppBundle\DAO;

//faire readAllByPromotion($id_promotion)

use AppBundle\Model\Etudiant;
use \PDO;
use PDOException;
use AppBundle\Model\Promotion;

class DAOEtudiant implements iDAO{

    private $_bdd;

    function __construct(){
        $this->_bdd = DatabaseConnectionSingleton::getInstance();
    }

    /**
     * Creates a new record
     * @param Object $object
     *
     * @return bool
     */
    public function create($object) {
        $done = FALSE;
        try {
            $req = 'INSERT INTO Student (lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option, birth_date, password)
                        VALUES (:lname, :fname, :mail, :address, :town, :postal_code, :phone, :id_promotion, :id_option, :birthdate, :password)';
            $statement = $this->_bdd->prepare($req);
            $idPromotion = null;
            if($object->getIdPromotion() instanceof Promotion){
                $idPromotion = $object->getIdPromotion()->getId();
            }else{
                $idPromotion = $object->getIdPromotion();
            }
            $params = array(
                ':lname' => $object->getLastname(),
                ':fname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':address' => $object->getAddress(),
                ':town' => $object->getTown(),
                ':postal_code' => $object->getPostalCode(),
                ':phone' => $object->getPhoneNumber(),
                ':id_promotion' => $idPromotion,
                ':id_option' => $object->getIdOption(),
                ':birthdate' => $object->getBirthdate(),
                ':password' => $object->getPassword()
            );
            $statement->execute($params);
            $object->setId($this->_bdd->lastInsertId());
            $done = TRUE;
        } catch (PDOException $e) {
            echo "Erreur durant la création d'un Etudiant: " . $e->getMessage();
        }
        return $done;
    }

    /**
     * Reads a record
     * @param mixed $id
     * @return Etudiant|null
     */
    public function read($id) {
        $res = NULL;
        try {
            $req='SELECT lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option, birth_date, password FROM Student WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':id' => $id));
            if($obj = $statement->fetch(PDO::FETCH_OBJ)) {
                $res = new Etudiant(
                    $id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    $obj->password
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    }

    /**
     * Reads a record
     * @param String $mail
     */
    public function readByMail($mail) {
        $res = NULL;
        try {
            $req='SELECT id, lastname, firstname, address, town, postal_code, phone_number, id_Promotion, id_Option, birth_date, password FROM Student WHERE mail = :mail';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':mail' => $mail));
            if($obj = $statement->fetch(PDO::FETCH_OBJ)) {
                $res = new Etudiant(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    $obj->password
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    }

    /**
     * Reads a record
     * @param mixed $id
     * @return mixed|null
     */
    public function readWithOptionAndPromotion($id) {
        $res = NULL;
        try {
            $req='SELECT lastname, firstname, mail, address, town, postal_code, phone_number, year, wording, birth_date, password
                  FROM Student
                  INNER JOIN `Option` o on Student.id_Option = o.id
                  INNER JOIN Promotion p on Student.id_Promotion = p.id
                  WHERE Student.id = :id';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':id' => $id));
            $res = $statement->fetch(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    }

    public function readPassword($id) {
        $res = NULL;
        try {
            $req='SELECT password FROM Student WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':id' => $id));
            $obj = $statement->fetch(PDO::FETCH_OBJ);
            $res = $obj->password;
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    }

    /**
     * Reads all records
     * @return array Array of objects
     */
    public function readAll() {
        $res = NULL;
        try {
            $res = [];
            $req='SELECT id, lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option, birth_date FROM Student';
            $rows = $this->_bdd->query($req);
            while($obj = $rows->fetch(PDO::FETCH_OBJ)){
                $res[] = new Etudiant(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    ""
                );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;


    }
    /*
     * Updates a record
     * @param Etudiant $object
     */
    public function update($object){
        $done = FALSE;
        try {
            $req='UPDATE Student
            SET lastname = :lname, firstname = :fname, mail = :mail, address=:address, town=:town, postal_code=:postal_code, phone_number=:phone, id_Promotion=:id_promotion, id_Option=:id_option, birth_date=:birthdate
            WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $idPromotion = null;
            if($object->getIdPromotion() instanceof Promotion){
                $idPromotion = $object->getIdPromotion()->getId();
            }else{
                $idPromotion = $object->getIdPromotion();
            }
            $params = array(
                ':lname' => $object->getLastname(),
                ':fname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':address' => $object->getAddress(),
                ':town' => $object->getTown(),
                ':postal_code' => $object->getPostalCode(),
                ':phone' => $object->getPhoneNumber(),
                ':id_promotion' => $idPromotion,
                ':id_option' => $object->getIdOption(),
                ':birthdate' => $object->getBirthdate(),
                ':id' => $object->getId()
            );
            $statement->execute($params);
            $done = TRUE;
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'un Etudiant: " . $e->getMessage();
        }
        return $done;
    }

    public function updatePassword($id, $password) {
        $done = false;
        try {
            $req='UPDATE Student SET password = :password WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $done = $statement->execute(array(
                ':id' => $id,
                ':password' => $password
            ));
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $done;
    }

    /*
     * Deletes a record
     * @param mixed $id
     */
    public function delete($id){
        $done = FALSE;
        try {
            $req='DELETE FROM Student WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $statement->execute(array(':id' => $id));
        } catch (PDOException $e) {
            echo "Erreur durant la suppression d'un Etudiant: " . $e->getMessage();
        }
        return $done;
    }

    public function readAllByPromotion($id_promotion){
        $res = NULL;
        try {
            $res = [];
            $req='SELECT Student.id, lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option, birth_date, password FROM Student WHERE id_Promotion=:id_promotion';
            $rows = $this->_bdd->prepare($req);
            $rows->BindValue(':id_promotion',$id_promotion);
            $rows->execute();
            while($obj = $rows->fetch(PDO::FETCH_OBJ)){
                $res[] = new Etudiant(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    $obj->password
                );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    }
    
    
    public function readAllByInscriptionEnCours(){
        $res = NULL;
        try {
            $res = [];
            $req='SELECT id, lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option,inscription, birth_date, password FROM Student WHERE inscription LIKE \'en cours\'';;
            $rows = $this->_bdd->query($req);
            while($obj = $rows->fetch(PDO::FETCH_OBJ)){
                $res[] = new Etudiant(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    $obj->inscription,
                    ""
                    );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    } 
    
    public function readAllByInscriptionValide(){
        $res = NULL;
        try {
            $res = [];
            $req='SELECT id, lastname, firstname, mail, address, town, postal_code, phone_number, id_Promotion, id_Option,inscription, birth_date, password FROM Student WHERE inscription LIKE \'inscrit\'';
            $rows = $this->_bdd->query($req);
            while($obj = $rows->fetch(PDO::FETCH_OBJ)){
                $res[] = new Etudiant(
                    $obj->id,
                    $obj->lastname,
                    $obj->firstname,
                    $obj->mail,
                    $obj->address,
                    $obj->town,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->id_Promotion,
                    $obj->id_Option,
                    $obj->birth_date,
                    $obj->inscription,""
                    );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'un étudiant: " . $e->getMessage();
        }
        return $res;
    } 
    
    public function valideEtudiant($id) {
        $done = false;
        try {
            $req='UPDATE Student SET inscription = \'inscrit\' WHERE id = :id';
            $statement = $this->_bdd->prepare($req);
            $done = $statement->execute(array(
                ':id' => $id
            ));
        } catch (PDOException $e) {
            echo "Erreur durant la valisation d'un étudiant: " . $e->getMessage();
        }
        return $done;
    }
}
