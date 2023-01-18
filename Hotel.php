<?php

class Hotel{

    // attribute
    private $nom_hotel;
    private $ville_hotel;
    private $adresse;
    private $code_postal;

    //contruct methode
    public function __construct($nom_hotel, $ville_hotel, $adresse, $code_postal)
    {
        $this->nom_hotel= $nom_hotel;
        $this->ville_hotel= $ville_hotel;
        $this->adresse= $adresse;
        $this->code_postal= $code_postal;
    }

    // setter functions
    public function set_nom_hotel(){
       $this->nom_hotel;
    }
    public function set_ville_hotel(){
       $this->ville_hotel;
    }
    public function set_adresse(){
       $this->adresse;
    }
    public function set_code_postal(){
       $this->code_postal;
    }

    // getter functions
    public function get_nom_hotel(){
       return $this->nom_hotel;
    }
    public function get_ville_hotel(){
        return $this->ville_hotel;
    }
    public function get_adresse(){
        return $this->adresse;
    }
    public function get_code_postal(){
        return $this->code_postal;
    }

    // tostring function
    public function __toString()
    {
        return "</br>{$this->nom_hotel} **** {$this->ville_hotel} </br> {$this->adresse} 
        {$this->code_postal} </br>";
    }

}
