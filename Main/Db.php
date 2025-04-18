<?php
namespace actuconcoursjobs\Main;

use PDO; //on importe  PDO
use PDOException;
  class Db extends PDO
  {
      //Instance unique de la classe
      private static $instance;
      //parametres de connexion  a la bd lws
      private const DBHOST = '185.98.131.109';
      private const DBUSER = 'actuc1645404';
      private const DBPASS = 'brzvy8ykog';
      private const DBNAME = 'actuc1645404';

      //parametres de connexion  a la bd locale
     /* private const DBHOST = 'localhost';
      private const DBUSER = 'root';
      private const DBPASS = '';
      private const DBNAME = 'actuconcoursjobs';*/


      private function __construct()
      {
          //DSN de connexion
          $_dsn = 'mysql:dbname=' . self::DBNAME . ';host=' .self::DBHOST;
          
          //on appelle le constructeur de la classe PDO
          try{
             // echo 'Object here';
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
           // $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES iso-8859-1');
           // $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//FETCH_ASSOC permet d'avoir un tableau associatif apres fetchall
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//FETCH_OBJ permet d'avoir un objet apres fetchall
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//declencher une erreure quand il y a une exception
          //  echo 'Object here';
          } catch(PDOException $e)
          {
              die($e->getMessage());
          }
          
      }
  /**
   * fonction retournant une instance de la classe
   *
   * @return self self represente la classe actuelle
   */
      public static function getInstance():self
      {
          if(self::$instance === null)
          {
              self::$instance = new self();
          }
          return self::$instance;
      }
  }