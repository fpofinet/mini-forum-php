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
    function updateUser($user){
        $base=dbConnect();
        try{
            $query="UPDATE users set name=?,email=?";
            //$date=date("Y-m-d H:i:s");

            $query=$base->prepare($query);
            $query->execute(array($user->getPseudo(),$user->getEmail()));
            //echo "breaker";
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
    function showOneUser($id){
        $base=dbConnect();
        try{
            //$query=$base->query("SELECT * FROM users WHERE indexUser=?");
            $query=$base->prepare("SELECT * FROM users WHERE indexUser=?");
            $query->execute(array($id));
            $data=$query->fetch();
            return $data;
        } catch(Exception $e) {
            echo "erreur :: ".$e->getMessage();
        }

    }

    function deleteUser($idUser){

    }
    function signIn($login,$password){
        $list=showAllUser();
        var_dump($list);
        foreach($list as $row){
            
            if($row["password"]==$password && $row["email"]==$login){
               $_SESSION["id"]=$row["indexUser"];
                $_SESSION["userName"]=$row["name"];
                return 1;
            }
        }
        return 0;
    }
    //signIn(1,1);
   // var_dump(showOneUser(1));
?>