<?php
namespace AppBundle\DAO;

//include_once '../Model/Company.php';
use AppBundle\DAO\iDAO;
use AppBundle\DAO\DatabaseConnectionSingleton;
use AppBundle\Model\Company;
use \PDO;

class DAOCompany implements iDAO{
    
    private $connect;
    
    function __construct(){
        $this->connect = DatabaseConnectionSingleton::getInstance();
        
    }
    
    public function read($id){
        try{
            $req="SELECT name,address,postal_code,phone_number,town,category FROM Company where id = :id";
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':id' => $id));
            if($obj = $statement->fetch(\PDO::FETCH_OBJ)) {
                $res = new Company(
                    $id,
                    $obj->name,
                    $obj->address,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->town,
                    $obj->category
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une entreprise " . $e->getMessage();
        }
        return $res;
    
    }

    public function create($object){
        
        $bool = FALSE;
        try {
            $req = 'INSERT INTO Company (name,address,postal_code,phone_number,town,category)';
            $req.= ' VALUES (:name, :addr, :postalCode, :phone, :town, :cate)';
            $statement = $this->connect->prepare($req);
            $params = array(
                ':name' => $object->getName(),
                ':addr' => $object->getAddress(),
                ':postalCode' => $object->getPostal_code(),
                ':phone' => $object->getPhone_number(),
                ':town' => $object->getTown(),
                ':cate' => $object->getCategory(),
            );
            $bool = $statement->execute($params);
        } catch (PDOException $e) {
            echo "Erreur durant la création d'un Tuteur: " . $e->getMessage();
        }
        return $bool;
    }
 
    public function readByName($name){
        
        try{
            $req="SELECT id,name,address,postal_code,phone_number,town,category from Company where name like :name";
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':name' => '%'.$name.'%'));
            $obj = $statement->fetch(\PDO::FETCH_OBJ);
            if(empty($obj)){
                $res = null;
            }else{
            $res = new Company(
                $obj->id,
                $obj->name,
                $obj->address,
                $obj->postal_code,
                $obj->phone_number,
                $obj->town,
                $obj->category
                );
            }
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une entreprise " . $e->getMessage();
        }
       
        return $res;
         
    }
    

    
    public function readByOptionAndTown($option, $town){
        
        
        try{
            $req="select Company.id, Company.name, Company.address, Company.postal_code, Company.phone_number, town, category from Company
              inner join `Option`
              on Company.category = `Option`.id
              where town = :ville
              and `Option`.wording = :option";
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':option' => $option,
                                      ':ville' => $town
            ));
            $res=array();
            while($obj = $statement->fetch(\PDO::FETCH_OBJ)){
                $res[] = new Company(
                    $obj->id,
                    $obj->name,
                    $obj->address,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->town,
                    $obj->category
                    );
            }
            
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une entreprise " . $e->getMessage();
        }
        return $res;

    }
 
    public function update($object){
        $bool = FALSE;
        try {
            $req='UPDATE Company';
            $req .= ' SET address= :address,phone_number= :phone';
            $req .= ' WHERE id = :id';
            $statement = $this->connect->prepare($req);
            $params = array(
                ':address' => $object->getAdress(),
                ':phone_number' => $object->getPhone_number()
                
            );
            $bool = $statement->execute($params);
        } catch (PDOException $e) {
            echo "Erreur durant la mise à jour d'une entreprise:" . $e->getMessage();
        }
        return $bool;
    }

    public function delete($id){
        
        $done = FALSE;
        try {
            $req='DELETE FROM Company WHERE id=:id';
            $statement = $this->connect->prepare($req);
            //$statement->BindValue(':id',$id);
            $done = $statement->execute(array(':id' => $id));
        } catch (PDOException $e) {
            echo "Erreur durant la suppression d'une entreprise: " . $e->getMessage();
        }
        return $done;
     
        
    }

    public function readAll(){
        $res = NULL;
        try {
            
            $req='SELECT id,name,address,postal_code,phone_number,town,category FROM Company';
            $rows = $this->connect->query($req);
            while($obj = $rows->fetch(\PDO::FETCH_OBJ)){
                $res[] = new Company(
                    $obj->id,
                    $obj->name,
                    $obj->address,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->town,
                    $obj->category
                    );
            }
        } catch (PDOException $e) {
            $res = NULL;
            echo "Erreur durant la lecture d'une entrerpise " . $e->getMessage();
        }
        return $res;
        
        
        
        
    }
  
    public function readByOption($id){
        
        
        try{
            $req="SELECT * FROM Company INNER JOIN `Option` ON Company.category=Option.id WHERE Company.id=:id";
            $statement = $this->connect->prepare($req);
            $statement->execute(array(':id' => $id));
            $res=array();
            while($obj = $statement->fetch(\PDO::FETCH_OBJ)){
                $res[] = new Company(
                    $obj->id,
                    $obj->name,
                    $obj->address,
                    $obj->postal_code,
                    $obj->phone_number,
                    $obj->town,
                    $obj->category,
                    $obj->wording
                    );
            }
            
        } catch (PDOException $e) {
            echo "Erreur durant la lecture d'une entreprise " . $e->getMessage();
        }
        return $res;
        
    }
    
}
