<?php
    session_start();
    include("../controller/publicationController.php");
    $listPub=showAllPublications();
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
    <title>DASHBOARD</title>
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
                    <div class="form-group">
                        <label for="titre">Titre </label>
                        <input type="text" name="titre" id="titre"  size="50" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="billet">Votre texte</label>
                        <textarea name="billet" id="billet" cols="20" rows="" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="publier" id="publier" value="poster" class="btn btn-primary">
                </form>
            </div>
            <?php
                foreach($listPub as $pub){
                    echo '<div class="row" style="margin:40px;margin-right:30px">
                    <span style="display: inline-block; width:100%; background-color:#318CE7;"> publier le '.$pub["datePub"] .'</span>
                        <div class="container col-2" style="background-color:white;">
                            <img src="../imgs/mona.png" alt="" class="rounded-circle"><br>
                            Tester02 <br>
                            Etudiant  <br>
                            Publications <br>                    
                        </div>
                        <div class="container col-10" style="padding:0px">
                            <span id="textContent" style="background-color:#BBD2E1;width:100%">
                            '.$pub["titre"] .'
                            </span>
                            <span id="textContent">
                            '.$pub["contenu"] .' 
                            </span>
                        </div>
                        <span style="display: inline-block; width:100%; background-color:#00CCCB;"> <a href="updatePub.php?idp='.$pub["indexPub"].'"> modifier  </a></span>
                    </div>';
                }
            ?>
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