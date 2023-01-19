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

    // function number of room in Hotel
    public function nombre_reservation(){

        // add a count function that is in Client!!!!!

        $nombre_chambre = 30;
        $chambre_reserver = 3;

        echo "Nombres de chambres : ".$nombre_chambre ."</br>";
        echo "Nombres de chambres réservées : ".$chambre_reserver."</br>";

        if ($chambre_reserver != 0){
            $nombre_chambre -= $chambre_reserver;
            echo "Nombres de chambres dispo : " . $nombre_chambre."</br>";
        }else{
            echo " Aucune réservation !";
        }
    }

    // nombre_chambre <- 30
    // chambre_reserver <- 3

    // si (chambre_reserver != 0) alors
    //      nombre_chambre <- nombre_chambres - chambre_reserver 
    // fin si

    // ecrire chambre_reserver
    // ecrire nombre_chambre 

    // function 0 reservation 
    // si (hotel <- 0) alors
    //      ecrire "Aucune réservations !"
    // fin si
    

    // tostring function
    public function __toString()
    {
        return "{$this->nom_hotel} {$this->ville_hotel} {$this->adresse} 
        {$this->code_postal}";
    }

}

