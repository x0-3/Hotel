<?php

include 'Hotel.php';
include 'Client.php';
include 'Chambre.php';
include 'Reservation.php';


$hotel1= new Hotel("Hilton", "Strasbourg", "10 route de la Gare", "67000 STRASSBOURG");

$client1= new Client("Machin", "Mark");
$chambre1= new Chambre(5, "135 €", true, true, $hotel1, $client1);
$Reservation1= new Reservation("01-01-01-2021", "03-01-2021", $hotel1, $chambre1, $client1);

echo $Reservation1;