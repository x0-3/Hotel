<?php

class Chambre{

    // attribute
    private $numero_chambre;
    private $prix_chambre;
    private $wifi;
    private $etat_chambre;
    private $hotel;
    private array $reservations;

    //contruct methode
    public function __construct($numero_chambre, $prix_chambre, $wifi, $etat_chambre, Hotel $hotel)
    {
        $this->numero_chambre= $numero_chambre;
        $this->prix_chambre= $prix_chambre;
        $this->wifi= $wifi;
        $this->etat_chambre= $etat_chambre;
        $this->hotel = $hotel;
        $hotel->addChambres($this);
        $this->reservations = [];
       
    }

    // setter functions
    public function set_numero_chambre(){
       $this->numero_chambre;
    }
    public function set_prix_chambre(){
       $this->prix_chambre;
    }
    public function set_wifi(){
       $this->wifi;
    }
    public function set_etat_chambre(){
       $this->etat_chambre;
    }


    // getter functions
    public function get_numero_chambre(){
       return $this->numero_chambre;
    }
    public function get_prix_chambre(){
        return $this->prix_chambre;
    }
    public function get_wifi(){
        return $this->wifi;
    }
    public function get_etat_chambre(){
        return $this->etat_chambre;
    }


    
    //mettre $reservation dans un tableau
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
   //afficher les chambres de les resevation a l'aide d'un forEach
    public function afficherReservations(){
       foreach($this->reservations as $reservation){
           echo $reservation;
           
        }
    }


    // tostring function
    public function __toString()
    {
        return " </br> numéro de la chambre : {$this->numero_chambre} 
        </br> prix de la chambre : {$this->prix_chambre} </br> wifi : {$this->wifi} 
        </br> état de la chambre : {$this->etat_chambre} </br> ";
    }

}
