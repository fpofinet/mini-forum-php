<?php
    function dbConnect(){
    $host="127.0.0.1:3308";
    $user="root";
    $password="";
    $database="iverson";
    $PDO_OPTION[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    
    try{
        $PDO=new PDO("mysql:host=".$host.";dbname=".$database,$user,$password,$PDO_OPTION);
    }
    catch(Exception $e){
        die("erreur : ".$e->getMessage());
    }
    return $PDO;

    }

?>