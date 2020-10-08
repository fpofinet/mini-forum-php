<?php 
    require("../controller/session.php");
    if(isset($_GET["id"])){
        $codeUser=$_GET["id"];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/perso.css">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jQuery.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon compte</title>
</head>
<body>
<header>
        <img src="../imgs/banner1.jpg" id="img"class="img-fluid">  
    </header>
    
    <div class="row" style="margin: 40px">
        <span class="" id="headFlag"> Tester 1 </span>
        <div class="container col-lg-3 col-md-3 col-sm-3 col-8" id="userInfo" >
            <img src="../imgs/back.jpg" alt="tester profil" class="img-thumbnail" style="margin:10px">
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
                <form action="./controller/main.php" class="well" method="POST">
                    <input type="hidden" name="codeuser" id="codeUser" value=<?php echo  $codeUser;?> >
                    <div class="form-group">
                        <label for="pseudo">Pseudo : </label>
                        <input type="text" name="pseudo"  value="lalala" id="pseudo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" name="email" value="lalala" id="email" class="form-control">
                    </div>
                    <input type="reset" class="btn btn-danger" name="reset" id="reset" value="Vider">
                    <input type="submit" class="btn btn-primary" name="update" id="update" value="Modifier">
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