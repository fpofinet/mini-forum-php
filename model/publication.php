<?php
    class Publication{
        private $id_pub;
        private $titre_pub;
        private $contenu_pub;
        private $date_pub;
        private $auteur_pub;


        function __construct($titre,$contenu,$auteur){
            $this->titre_pub=$titre;
            $this->contenu_pub=$contenu;
            $this->auteur_pub=$auteur;
        }
        

        /**
         * Get the value of auteur_pub
         */ 
        public function getAuteur_pub()
        {
                return $this->auteur_pub;
        }

        /**
         * Set the value of auteur_pub
         */ 
        public function setAuteur_pub($auteur_pub)
        {
                $this->auteur_pub = $auteur_pub;
        }

        /**
         * Get the value of contenu_pub
         */ 
        public function getContenu_pub()
        {
                return $this->contenu_pub;
        }

        /**
         * Set the value of contenu_pub
         */ 
        public function setContenu_pub($contenu_pub)
        {
                $this->contenu_pub = $contenu_pub;
        }

        /**
         * Get the value of date_pub
         */ 
        public function getDate_pub()
        {
                return $this->date_pub;
        }

        /**
         * Set the value of date_pub
         */ 
        public function setDate_pub($date_pub)
        {
                $this->date_pub = $date_pub;
        }

        /**
         * Get the value of titre_pub
         */ 
        public function getTitre_pub()
        {
                return $this->titre_pub;
        }

        /**
         * Set the value of titre_pub
         */ 
        public function setTitre_pub($titre_pub)
        {
                $this->titre_pub = $titre_pub;
        }

        /**
         * Get the value of id_pub
         */ 
        public function getId_pub()
        {
                return $this->id_pub;
        }

        /**
         * Set the value of id_pub
         */ 
        public function setId_pub($id_pub)
        {
                $this->id_pub = $id_pub;
        }
    }
?>