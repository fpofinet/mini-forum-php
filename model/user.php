<?php

class User {
    private $id_user;
    private $pseudo;
    private $email;
    private $password;
    private $image;
    
    function __construct($pseudo,$email,$password)
    {
        //$this->id_user=$id;
        $this->pseudo=$pseudo;
        $this->email=$email;
        $this->password=$password;
       // $this->image=$image;

    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        //return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

       // return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

       // return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

       // return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        //return $this;
    }
}
?>