<?php

class Client{

    // attribute
    private $nom;
    private $prenom;

    //contruct methode
    public function __construct($nom, $prenom)
    {
        $this->nom= $nom;
        $this->prenom= $prenom;
    }

    // setter functions
    public function set_nom(){
       $this->nom;
    }
    public function set_prenom(){
       $this->prenom;
    }

    // getter functions
    public function get_nom(){
       return $this->nom;
    }
    public function get_prenom(){
        return $this->prenom;
    }

    // tostring function
    public function __toString()
    {
        return "</br> Nom : {$this->nom} </br> prénom : {$this->prenom} </br>";
    }

}
