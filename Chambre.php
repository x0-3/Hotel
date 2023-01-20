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
    
    // TODO: add icons 
    public function get_wifi(){
        if ($this->wifi == true){    
            // return "<span uk-icon='icon: check; ratio: 2'></span>";
            return "oui";
        }else{
            return "Non";
        }
        return $this->wifi;
    }

    // TODO: add background color
    public function get_etat_chambre(){
        if ($this->etat_chambre == true){
            return "<p class='uk-text-danger'>Réserver</p>";
        }else{
            return "<p class='uk-text-success'> Disponible </p>";
        }
        return $this->etat_chambre;
    }

 
    //add $resevation in an array
    public function addReservations(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    // show the rooms reservation with a forEach
    public function afficherReservations(){
       foreach($this->reservations as $reservation){
           echo $reservation;
        }
    }


    // tostring function
    public function __toString()
    {
        return "Chambre : {$this->numero_chambre} -
     prix de la chambre : {$this->prix_chambre} - wifi : {$this->wifi} -
     état de la chambre : {$this->get_etat_chambre()} ";
    }

}
