<?php

class Reservation{

    // attribute
    private DateTime $date_debut_reservation;
    private DateTime $date_fin_reservation;
    private $hotel;
    private Chambre $chambre;
    private Client $client;

    // construct methode
    public function __construct( $date_debut_reservation,  $date_fin_reservation, $hotel, Chambre $chambre, Client $client)
    {
        $this->date_debut_reservation= new DateTime($date_debut_reservation);
        $this->date_fin_reservation= new DateTime($date_fin_reservation); 
        $this->hotel= $chambre->getHotel();
        $hotel->addReservations($this);
        $this->chambre= $chambre;
        $chambre->addReservations($this);
        $this->client= $client;
        $client->addReservations($this);
    }


    // setter function
    public function set_date_debut(){
       $this->date_debut_reservation ;
    }
    public function set_date_fin_reservation(){
       $this->date_fin_reservation;
    }
    public function set_hotel(){
       $this->hotel;
    }
    public function set_chambre(){
       $this->chambre;
    }
    public function set_client(){
       $this->client;
    }
    

    // getter function
    public function get_date_debut(){
       return $this->date_debut_reservation;
    }
    public function get_date_fin_reservation(){
        return $this->date_fin_reservation;
    }
    public function get_hotel(){
        return $this->hotel;
    }
    public function get_chambre(){
        return $this->chambre;
    }
    public function get_client(){
        return $this->client;
    }


    public function nb_jour(){
        
        $nb_jour_debut=$this->date_debut_reservation;
        $nb_jour_fin= $this->date_fin_reservation;
        $diff= $nb_jour_debut->diff($nb_jour_fin)->format("%d"); 

        return intval($diff);
    }

    // toString function
    public function __toString()
    {
        return "{$this->hotel}</br>{$this->client} - {$this->chambre}  du {$this->date_debut_reservation-> format("d/m/Y")} 
        au {$this->date_fin_reservation-> format("d/m/Y")}";
    }

}



    