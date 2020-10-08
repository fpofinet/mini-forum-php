<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!--link rel="stylesheet" type="text/css" href="../css/perso.css"-->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jQuery.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button type="button" class="close" aria-label="Close">
<?php
require("../controller/userController.php");
var_dump(showAllUser());
?>
</button>
</body>
</html>