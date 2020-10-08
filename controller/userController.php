<?php
session_start();
    require("connection.php");
    //require("session.php");
    //$base=$PDO;
    function adduser($user){
        $base=dbConnect();
        try{
            $query="INSERT INTO users(name,password,email,dateCreate) values (?,?,?,?)";
            $date=date("Y-m-d H:i:s");

            $query=$base->prepare($query);
            $query->execute(array($user->getPseudo(),$user->getPassword(),$user->getEmail(),$date));
            return 1;
        } catch(Exception $e){
            echo "erreur :: ".$e->getMessage();
            return 0;
        }
        
    }
    function upDateUser($user){
        $base=dbConnect();
        try{
            $query="UPDATE users set name=?,email=?) values (?,?)";
            //$date=date("Y-m-d H:i:s");

            $query=$base->prepare($query);
            $query->execute(array($user->getPseudo(),$user->getEmail()));
            return 1;
        } catch(Exception $e){
            echo "erreur :: ".$e->getMessage();
            return 0;
        }
    }
    function showAllUser(){
        $base=dbConnect();
        try{
            $query=$base->query("SELECT * FROM users");
            $data=$query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch(Exception $e) {
            echo "erreur :: ".$e->getMessage();
        }

    }

    function delleteUser($idUser){

    }
    function signIn($login,$password){
        $list=showAllUser();
        foreach($list as $row){
            if($row["password"]==$password && $row["email"]==$login){
                $_SESSION["id"]=$row["idUser"];
                $_SESSION["userName"]=$row["pseudo"];
                return 1;
            }
        }
        return 0;
    }
?>