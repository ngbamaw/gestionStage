<?php
namespace AppBundle\DAO;

use AppBundle\DAO\iDAO;
use AppBundle\DAO\DatabaseConnectionSingleton;
use AppBundle\Model\Promotion;

class DaoPromotion implements iDAO{
    private $co;
    
    function __construct(){
        $this->co = DatabaseConnectionSingleton::getInstance();
        
    }
    /*
     * Creates a new record
     * @param String $date : need à date of type 'yyyy-mm-dd'
     *
     */
    public function create($year){
        try{
            $req="INSERT INTO Promotion(year) VALUES(:year)";
            $prep = $this->co->prepare($req);
            $prep->BindValue(':year', $year);
            $prep->execute();
        }
        catch(PDOException $e){
            echo "Erreur lors de l'éxécution de la requète : " +$e;
        }
       }
    
    /*
     * Reads a record
     * @param mixed $id
     * @return String $date : retrun the first year of a promotion
     */
    public function read($id){
        try{
            $req="SELECT year FROM Promotion WHERE id = :id";
            $prep = $this->co->prepare($req);
            $prep->BindValue(':id', $id);
            if($row = $prep->fetch()){
                $res = new Promotion($id, $row->year);
            }
        }
        catch(PDOException $e){
            echo "Erreur lors de l'éxécution de la requète : " +$e;
        }
        return $res;
    }
    
    
    /*
     * Reads a record
     * @param mixed $year
     * @return String $date : retrun the first year of a promotion
     */
    public function readByYear($year){
        $res = null;
        try{
            $req="SELECT id FROM Promotion WHERE year = :year";
            $prep = $this->co->prepare($req);
            $prep->BindValue(':year', $year);
            $prep->execute();
            if($row = $prep->fetch(\PDO::FETCH_OBJ)){
                $res = new Promotion($row->id, $year);
            }
            //var_dump($res);
        }
        catch(PDOException $e){
            echo "Erreur lors de l'éxécution de la requète : " +$e;
        }
        return $res;
    }
    
    /*
     * Reads all records
     * @return array Array of String : retrun all the first years of all the promotions in the database
     * 
     */
    public function readAll(){
        $res = array();
        try{
            $req="SELECT id,year FROM Promotion ORDER BY year";
            $prep = $this->co->prepare($req);
            $prep->execute();
            $rows = $prep->fetchAll(\PDO::FETCH_OBJ);
            foreach ($rows as $row){
              $res[] = new Promotion($row->id, $row->year);
            }
        }
        catch(PDOException $e){
            echo "Erreur lors de l'éxécution de la requète : " +$e;
        }
        return $res;
    }
    /*
     * Updates a record
     * @param Object $object
     * 
     * Will not be usefull
     */
    public function update($object){
        
    }
    
    /*
     * Deletes a record
     * @param mixed $id
     */
    public function delete($id){
        try{
            $req="DELETE FROM Promotion WHERE id=:id";
            $prep = $this->co->prepare($req);
            $prep->BindValue(':id', $id);
            $prep->execute();
        }
        catch(PDOException $e){
            echo "Erreur lors de l'éxécution de la requète : " +$e;
        }
    }
}
