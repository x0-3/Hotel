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

    //add $resevation in an array
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    // show the client reservation with a forEach
    public function afficherReservations(){
        foreach($this->reservations as $reservation){
            echo $reservation . "</br>";
        }
        return "<button class='uk-button uk-button-primary'>". count($this-> reservations) . " réservations</button>";

    }    


    // public function prixTotalReservation(){
    //     $total= 0;

    //     foreach($this->reservations as $prix){
    //         $total+=$prix->prix_chambre();
    //     }
    //     return "Le prix total est de : " .$total. " €<br>";
        
    // }

    // tostring function
    public function __toString()
    {
        return "{$this->nom} {$this->prenom}";
    }

}
