<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=lojaactionfigures;host=127.0.0.1;port = 3307';
$user = 'root';
$password = '';
$dbh = null;
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}







/*
$dsn ='mysql:dbname=lojaactionfigures;host=localhost;port = 3307';
$user = 'root';
$password = '';
$dbh= null;

try{
    $dbh = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,));
} catch (Exception $ex) {
    echo 'Conexão Falhou';
}


/*
class Conexao {
   public static $instance;
   private function __construct(){
       
   }
   
   public static function getInstance(){
       if(!isset(self::$instance)){
           self::$instance = new PDO("mysql:host = localhost;port = 3307;dbname:lojaactionfigures", "root",""
                   ,array(PDO::ERRMODE => PDO::ERRMODE_EXCEPTION));
       }
       else {
           return self::instance; 
       }
   }
   
}
*/
