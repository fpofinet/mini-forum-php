<?php
    require("../controller/session.php")
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
        <span class="" id="headFlag"> Tester 1 </span>
        <div class="container col-lg-3 col-md-3 col-sm-3 col-8" id="userInfo" >
            <img src="../imgs/back.jpg" alt="tester profil" class="img-thumbnail" style="margin:10px">
            <a href="./updateAccount.php?id=<?php echo  $_SESSION["id"];?>">
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
                <form action="../controller/main.php" action="post" class="well">
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
            
            <div class="row" style="margin:40px;margin-right:30px">
            <span style="display: inline-block; width:100%; background-color:red;">2020/01/01</span>
                <div class="container col-3" style="background-color:white;">
                    Tester02 <br>
                    Etudiant  <br>
                    Publications <br>
                                      
                </div>
                <div class="container col-9" style="padding:0px">
                    <span id="textContent" style="background-color:darkolivegreen;width:100%">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </span>
                    <span id="textContent">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vero, magnam voluptas a distinctio inventore unde voluptatibus quis explicabo esse! A delectus totam sequi cumque consequatur nihil veritatis tempore consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum a nemo, esse optio fugiat fuga nobis. Vero ab officia modi fuga quasi asperiores perspiciatis! Magnam provident temporibus at ipsum!
                        
                    </span>
                </div>
            </div>
            <div class="row" style="margin:40px;margin-right:30px">
            <span style="display: inline-block; width:100%; background-color:red;">2020/01/01</span>
                <div class="container col-3" style="background-color:white;">
                    Tester02 <br>
                    Etudiant  <br>
                    Publications <br>
                                      
                </div>
                <div class="container col-9" style="padding:0px">
                    <span id="textContent" style="background-color:darkolivegreen;width:100%">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </span>
                    <span id="textContent">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vero, magnam voluptas a distinctio inventore unde voluptatibus quis explicabo esse! A delectus totam sequi cumque consequatur nihil veritatis tempore consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum a nemo, esse optio fugiat fuga nobis. Vero ab officia modi fuga quasi asperiores perspiciatis! Magnam provident temporibus at ipsum!
                        
                    </span>
                </div>
            </div>
            <div class="row" style="margin-left:40px;margin-right:30px">
            <span style="display: inline-block; width:100%; background-color:red;">2020/01/01</span>
                <div class="container col-3" style="background-color:white;">
                    Tester02 <br>
                    Etudiant  <br>
                    Publications <br>
                                      
                </div>
                <div class="container col-9" style="padding:0px">
                    <span id="textContent" style="background-color:darkolivegreen;width:100%">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </span>
                    <span id="textContent">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vero, magnam voluptas a distinctio inventore unde voluptatibus quis explicabo esse! A delectus totam sequi cumque consequatur nihil veritatis tempore consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum a nemo, esse optio fugiat fuga nobis. Vero ab officia modi fuga quasi asperiores perspiciatis! Magnam provident temporibus at ipsum!
                        
                    </span>
                </div>
            </div>
            <div class="row" style="margin:40px;margin-right:30px">
            <span style="display: inline-block; width:100%; background-color:red;">2020/01/01</span>
                <div class="container col-3" style="background-color:white;">
                    Tester02 <br>
                    Etudiant  <br>
                    Publications <br>
                                      
                </div>
                <div class="container col-9" style="padding:0px">
                    <span id="textContent" style="background-color:darkolivegreen;width:100%">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </span>
                    <span id="textContent">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vero, magnam voluptas a distinctio inventore unde voluptatibus quis explicabo esse! A delectus totam sequi cumque consequatur nihil veritatis tempore consectetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum a nemo, esse optio fugiat fuga nobis. Vero ab officia modi fuga quasi asperiores perspiciatis! Magnam provident temporibus at ipsum!
                        
                    </span>
                </div>
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