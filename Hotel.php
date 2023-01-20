<?php

class Hotel{

    // attribute
    private $nom_hotel;
    private $ville_hotel;
    private $adresse;
    private $code_postal;
    private array $chambres; 
    private array $reservations;

    //contruct methode
    public function __construct($nom_hotel, $ville_hotel, $adresse, $code_postal)
    {
        $this->nom_hotel= $nom_hotel;
        $this->ville_hotel= $ville_hotel;
        $this->adresse= $adresse;
        $this->code_postal= $code_postal;
        $this->chambres= [];
        $this->reservations = [];
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


    //add $hotel in an array
    public function addChambres(Chambre $hotel){
         $this->chambres[] = $hotel;
    }

    // show the hotel rooms with a forEach
    public function afficherChambres(){
        foreach($this->chambres as $hotel){
            echo $hotel;
        }
    }

    // FIXME:
    // function number of room in Hotel
    public function nombre_reservation(){

        count($this->reservations);

        if (count($this->reservations) != 0){
            echo "Nombre de chambres : " ."</br>";
            echo "Nombre de chambres réservées : "."</br>";
            echo "Nombre de chambres dispo : "."</br>";
        }else{
            echo " Aucune réservation";
        }
    
    }

    
    // FIXME:
    public function PrixTotal(){
        $total= 0;

        foreach($this->reservations as $reservation){
            $total +=$reservation->get_prix_chambre();
        }
        echo "Le prix total est de : " .$total. " €<br>";
        
    }
    

    // tostring function
    public function __toString()
    {
        return "{$this->nom_hotel} {$this->ville_hotel} {$this->adresse} 
        {$this->code_postal}";
    }

}

