<?php

require("./session.php");
require("../model/user.php");
require("./userController.php");
if(isset($_POST['inscrire'])){
    $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password']);
    $rep=adduser($user);

    if($rep==1){
        //echo $_POST['pseudo']." ajoute avec succes";
        $_SESSION["userName"]=$_POST['pseudo'];

    }

    //echo $user->getPseudo();
}

?>