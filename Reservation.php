<?php

class Reservation{

    // attribute
    private $date_debut_reservation;
    private $date_fin_reservation;
    private Hotel $hotel;
    private Chambre $chambre;
    private Client $client;

    // construct methode
    public function __construct($date_debut_reservation, $date_fin_reservation, Hotel $hotel, Chambre $chambre, Client $client)
    {
        $this->date_debut_reservation= $date_debut_reservation;
        $this->date_fin_reservation= $date_fin_reservation;
        $this->hotel= $hotel;
        $this->chambre= $chambre;
        $this->client= $client;
    }

    // setter function
    public function set_date_debut(){
       $this->date_debut_reservation;
    }
    public function set_date_fin_reservation(){
       $this->date_fin_reservation;
    }

    // getter function
    public function get_date_debut(){
       return $this->date_debut_reservation;
    }
    public function get_date_fin_reservation(){
        return $this->date_fin_reservation;
    }


    // function 0 reservation 

    // si (client <- 0) alors
    //      ecrire "Aucune réservations !"
    // fin si



    // function number of room in Hotel

    // nombre_chambre <- 30
    // chambre_reserver <- 3

    // si (chambre_reserver != 0) alors
    //      nombre_chambre <- nombre_chambres - chambre_reserver 
    // fin si
    
    // ecrire chambre_reserver
    // ecrire nombre_chambre 



    // toString function
    public function __toString()
    {
        return "{$this->hotel}{$this->chambre}{$this->client} du {$this->date_debut_reservation} 
        au {$this->date_fin_reservation}";
    }

}
