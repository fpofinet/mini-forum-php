<?php
    include("../controller/publicationController.php");
    session_start();
    if(isset($_GET['idp'])){
        $code=$_GET['idp'];
    }
    $pub=showOnePublication($code);
?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/perso.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jQuery.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Publucation</title>
</head>
<body>
    <header>
        <img src="../imgs/banner1.jpg" id="img"class="img-fluid">  
    </header>
    
    <div class="row" style="margin: 40px">
        <span class="" id="headFlag"><?php echo $_SESSION["userName"]; ?> </span>
        <div class="container col-lg-3 col-md-3 col-sm-3 col-8" id="userInfo" >
            <img src="../imgs/back.jpg" alt="tester profil" class="img-thumbnail" style="margin:10px">
            <a href="./updateAccount.php">
                <button class="btn btn-primary" type="submit" name="updateUser">
                    Modifier mon compte
                </button>
            </a>
            <div>
                <span class="font-weight-bold"> Informations sur le compte </span>
                <p class="font-weight-bold">
                    Pseudo : <span class="font-weight-light"> Tester1 </span> <br>
                    Email : <span class="font-weight-light"> tester1@test.tg</span> <br>
                    Naissance : <span class="font-weight-light"> 2020/01/01</span> <br>
                    Publications (10) <br>
                    Amis (10) <br>

                </p>
            </div>
        </div>
        <div class="container  col-lg-9 col-md-9 col-sm-9 col-8" id="body">
            <div class="container col-lg-11 col-md-11 col-sm-11 col-12" id="bodyForm">
                <form action="../controller/main.php" method="post" class="well">
                    <input type="hidden" name="idp" id="idp" value="<?php echo $pub["indexPub"]?>">
                    <div class="form-group">
                        <label for="titre">Titre </label>
                        <input type="text" name="titreP" id="titre" value="<?php echo $pub["titre"]?>"  size="50" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="billet">Votre texte</label>
                        <textarea name="billetP" id="billet"  class="form-control"><?php echo $pub["contenu"] ?></textarea>
                    </div>
                    <input type="reset" name="vider" id="vider" value="vider" class="btn btn-danger">
                    <input type="submit" name="modifierP" id="modifierP" value="modifier" class="btn btn-primary">
                </form>
            </div>
        </div>
        
    </div>
    <footer>
        <p>Mise en page © Copyright 2010, Apprendre créer sites</p>

        <p><time pubdate datetime="2010-03-01"></time></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aut, iure alias necessitatibus laudantium nesciunt expedita rerum dolor ab quidem enim temporibus officia repellendus corporis, odio ipsum! Aut, nihil eaque.

        </p>
    </footer>
</body>
</html>