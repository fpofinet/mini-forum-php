<?php
//session_start();
require("../model/user.php");
include_once("./userController.php");

require("./publicationController.php");
include_once("../model/publication.php");

if(isset($_POST['inscrire'])){
    $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password']);
    $rep=adduser($user);

    if($rep==1){
        //echo $_POST['pseudo']." ajoute avec succes";
        $_SESSION["userName"]=$_POST['pseudo'];

    }   //echo $user->getPseudo();
}
if(isset($_POST["connecter"])){
    echo "ici";
    $test=signIn($_POST["login"],$_POST["pass"]);
    if($test==0){
        echo "here";
        $_SESSION["loginError"]="mot de passe ou login incorrecte";
        header("location: ../index.php");
    } else{
       // $_SESSION["id"]=$_POST["login"];
        //$_SESSION["userName"]=$_POST["pass"];
        echo "yesy";
        $_SESSION["loginError"]="";
        header("location: ../view/dashboard.php");
    }
}
if(isset($_POST["update"])){
    //echo $_POST["pseudo"];
    //echo $_POST["email"];
    $userUpdate = new User($_POST['pseudo'],$_POST['email'],"");
    $test=updateUser($userUpdate);
    if($test==1){
      //  echo "lel";
      $_SESSION["userName"]=$_POST['pseudo'];
        header("location: ../view/dashboard.php");
    } else{
        header("location: ../view/updateAccount.php");
    }
}
if(isset($_POST["publier"])){

    $publication = new Publication($_POST["titre"],$_POST["billet"],$_SESSION["id"]);
    $test=addPublication($publication);
    if($test==1){
        header("location: ../view/dashboard.php");
       //echo 'nnananna';
    } else{
        echo "nooooooon";
    }
}
if(isset($_POST["modifierP"])){
    $pub= new Publication($_POST["titreP"],$_POST["billetP"],"");
    $pub->setId_pub($_POST["idp"]);
    $test=updatePublication($pub);
    if($test==1){
        echo "yup";
        header("location: ../view/dashboard.php");
    } else {
        echo "nonn";
    }
}
?>