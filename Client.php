<?php

class Client{

    // attribute
    private $nom;
    private $prenom;
    private array $reservations;

    // contruct methode
    public function __construct($nom, $prenom)
    {
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->reservations= [];
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

    // mettre $reservation dans un tableau
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
        var_dump($reservation);
    }
   // afficher les clients de les resevation a l'aide d'un forEach
    public function afficherReservations(){
        foreach($this->reservations as $reservation){
            echo $reservation;
        }
    }


    // tostring function
    public function __toString()
    {
        return "</br> Nom : {$this->nom} </br> prénom : {$this->prenom} </br>";
    }

}
