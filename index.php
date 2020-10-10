<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/perso.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jQuery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVERSON FORUM</title>
</head>

<body class="row">
    <header>
       <img src="imgs/banner1.jpg" width="1375" height="110px">  
    </header>
    <div class="container">
        <form action="./controller/main.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" name="login" id="login" placeholder="login">
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="pass" id="pass" placeholder="Mot de passe">
            </div>
            <input type="submit" class="btn btn-primary" name="connecter" id="connecter" value="Se connecter">
        </form>
    </div>
    <div class="container">
        <div class="container col-offset-3 col-lg-8 col-sm-6 col-xs-4" id="formDiv">
         <span class="h4 container-fluid" id=""> FORMULAIRE D'INSCRIPTION </span>
            <form action="./controller/main.php" class="well" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo : </label>
                    <input type="text" name="pseudo" id="pseudo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="repassword">Confirmer le mot de passe</label>
                    <input type="password" name="repassword" id="repassword" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" name="inscrire" id="inscrire" value="S'inscrire">
            </form>
        </div>
    </div>
</body>
</html>