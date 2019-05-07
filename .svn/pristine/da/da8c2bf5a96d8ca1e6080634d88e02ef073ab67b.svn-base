<?php
namespace AppBundle\DAO;

use Doctrine\DBAL\Driver\PDOException;
use \PDO;
use AppBundle\Model\Professor;

class DAOProfesseur implements iDAO{
    
    private $_connec;
    
    public function __construct(){
        $this->_connec = DatabaseConnectionSingleton::getInstance();
    }

    /**
     * @param $id
     * @return Professor|null
     */
    public function read($id){
        $professor = null;
        
        try{
            
            $req = 'SELECT id, lastname, firstname, mail, phone_number, password
                    FROM Professor
                    WHERE id = :id';
            
            $prep = $this->_connec->prepare($req);
            
            $prep->bindValue(':id', $id);
            
            $prep->execute();
            
            if($row = $prep->fetch(\PDO::FETCH_OBJ)){
                $professor = new Professor(
                    $row->id,
                    $row->lastname,
                    $row->firstname,
                    $row->mail,
                    $row->phone_number,
                    $row->password
                    );
            }
            
        }catch (PDOException $e){
            echo $e->getMessage();
            echo $e->getTrace();
        }
        
        return $professor;
    }

    /**
     * @param $mail
     * @return Professor|null
     */
    public function readByMail($mail){
        $professor = null;

        try{

            $req = 'SELECT id, lastname, firstname, phone_number, password
                    FROM Professor
                    WHERE mail = :mail';

            $prep = $this->_connec->prepare($req);

            $prep->bindValue(':mail', $mail);

            $prep->execute();

            if($row = $prep->fetch(PDO::FETCH_OBJ)){
                $professor = new Professor(
                    $row->id,
                    $row->lastname,
                    $row->firstname,
                    $mail,
                    $row->phone_number,
                    $row->password
                );
            }

        }catch (PDOException $e){
            echo $e->getMessage();
            echo $e->getTrace();
        }

        return $professor;
    }

    public function create($object){
        $res = FALSE;
        try {
            $req='INSERT INTO Professor (lastname, firstname, mail, phone_number, password)
                    VALUES (:lastname, :firstname, :mail, :phone_number, :password)';
            
            $statement = $this->_connec->prepare($req);
            $params = array(
                ':lastname' => $object->getLastname(),
                ':firstname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':phone_number' => $object->getPhoneNumber(),
                ':password' => $object->getPassword()
            );
            $res = $statement->execute($params);
            
        } catch (PDOException $e) {
            echo "Erreur durant la création d'un professeur: " . $e->getMessage();
        }
        return $res;
    }
    
    public function update($object){
        $res = FALSE;
        try {
            $req = 'UPDATE Professor
                    SET
                        lastname = :lastname,
                        firstname = :firstname,
                        mail = :mail,
                        phone_number = :phone_number
                    WHERE id = :id';
            
            $statement = $this->_connec->prepare($req);
            $params = array(
                ':lastname' => $object->getLastname(),
                ':firstname' => $object->getFirstname(),
                ':mail' => $object->getMail(),
                ':phone_number' => $object->getPhoneNumber(),
                'id' => $object->getId()
            );
            $res = $statement->execute($params);
            
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'un professeur: " . $e->getMessage();
        }
        return $res;
    }

    public function updatePassword($object){
        $res = FALSE;
        try {
            $req = 'UPDATE Professor
                    SET
                        password = :password
                    WHERE id = :id';

            $statement = $this->_connec->prepare($req);
            $params = array(
                ':password' => $object->getPassword(),
                'id' => $object->getId()
            );
            $res = $statement->execute($params);

        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'un professeur: " . $e->getMessage();
        }
        return $res;
    }



    public function delete($id){
        $res = FALSE;
        
        try {
            $req = 'DELETES FROM Professor WHERE id = :id';
            
            $prep = $this->_connec->prep($req);
            
            $prep->bindValue(':id', $id);
            
            $res = $prep->execute();
            
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        
        return $res;
    }
    
    public function readAll(){
        $liste_professors = null;
        
        try{
            $req = 'SELECT id
                    FROM Professor';
            
            $res = $this->_connec->query($req);
            
            $liste_professors = $res->fetchAll(PDO::FETCH_OBJ);
            
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        
        return $liste_professors;
    }
    
    
    public function readAllDetailed(){
        $contacts = null;
        
        try{
            $req = "SELECT id,lastname,firstname,mail,phone_number FROM Professor";
            $prep= $this->_connec->prepare($req);
            $prep->execute();
            $contacts = array();
            $i=0;
            
            while($resl = $prep->fetch(\PDO::FETCH_OBJ)){
                $contacts[$i]['id'] = $resl->id;
                $contacts[$i]['nom'] = $resl->lastname;
                $contacts[$i]['prenom'] = $resl->firstname;
                $contacts[$i]['mail'] = $resl->mail;
                $contacts[$i]['tel'] = $resl->phone_number;
                $i++;
            }
            
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        
        return $contacts;
    }
    
}
?>
