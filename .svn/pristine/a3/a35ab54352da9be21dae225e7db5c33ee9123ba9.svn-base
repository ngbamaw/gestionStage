<?php
namespace AppBundle\DAO;

use \PDOException;
use \PDO;

class DatabaseConnectionSingleton

{

  private static $_instance; // Contiendra l'instance de notre classe.

  private function __construct(){
      try {
          self::$_instance = new PDO("mysql:host=www;dbname=GestionStage;charset=utf8", "AdminGS", "T12jaf6W");
      }
      catch (PDOException $e) {
          echo $e->getMessage();//traitement d'une erreur de connexion
      }
  } 
  public static function getInstance(){

    if (!isset(self::$_instance)) // Si on n'a pas encore instancié notre classe.   
    {
        new DatabaseConnectionSingleton(); // On s'instancie nous-mêmes. :)
    }

    return self::$_instance;
  }

}
