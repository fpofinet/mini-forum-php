 <?php

    include_once("connection.php");
     function addPublication($pub){
        $base=dbConnect();
        try{
            $query="INSERT INTO publications(titre,contenu,datePub,auteur) values (?,?,?,?)";
            $date=date("Y-m-d H:i:s");

            $query=$base->prepare($query);
            $query->execute(array($pub->getTitre_pub(),$pub->getContenu_pub(),$date,$pub->getAuteur_pub()));
            return 1;
        } catch(Exception $e){
            echo "erreur :: ".$e->getMessage();
            return 0;
        }
    }
    function showAllPublications(){
        $base=dbConnect();
        try{
            $query=$base->query("SELECT * FROM publications ORDER BY datePub DESC");
            $data=$query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch(Exception $e) {
            echo "erreur :: ".$e->getMessage();
        }
    }
    function showOnePublication($idPub){
        $base=dbConnect();
        try{
            //$query=$base->query("SELECT * FROM users WHERE indexUser=?");
            $query=$base->prepare("SELECT * FROM publications WHERE indexPub=?");
            $query->execute(array($idPub));
            $data=$query->fetch();
            return $data;
        } catch(Exception $e) {
            echo "erreur :: ".$e->getMessage();
        }
    }
    function updatePublication($pub){
        $base=dbConnect();
        try{
            $query="UPDATE publications set titre=?,contenu=? WHERE indexPub=?";
            //$date=date("Y-m-d H:i:s");

            $query=$base->prepare($query);
            $query->execute(array($pub->getTitre_pub(),$pub->getContenu_pub(),$pub->getId_pub()));
            //echo "breaker";
            return 1;
        } catch(Exception $e){
            echo "erreur :: ".$e->getMessage();
            return 0;
        }
    }
    function deletePublication($id){

    }
 ?>