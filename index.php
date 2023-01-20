<?php

include 'Hotel.php';
include 'Client.php';
include 'Chambre.php';
include 'Reservation.php';


$hotel1= new Hotel("Hilton", "Strasbourg", "10 route de la Gare", "67000 STRASSBOURG");
$client1= new Client("Machin", "Mark");
$chambre1= new Chambre(1, "135 €", true, true, $hotel1, $client1);
$reservation1= new Reservation("01-01-01-2021", "03-01-2021", $hotel1, $chambre1, $client1);

$hotel2= new Hotel("Regent", "Paris", "10 route de la Gare", "Paris");
$chambre2= new Chambre(2, "135 €", false, false, $hotel1, $client1);

$chambres = array($chambre1, $chambre2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.21/dist/css/uikit.min.css" />

</head>
<body>
    
   <?php
    // infos on a hotel (Hilton)
    echo "<h1 class='uk-text-lead'>".$hotel1->get_nom_hotel() . " **** " . $hotel1->get_ville_hotel()."</h1>",
    "<p>".$hotel1->get_adresse() . " " . $hotel1->get_code_postal()."</p>";
    "<p>".$hotel1->nombre_reservation() ."</p>";

    echo "<h1 class='uk-text-lead'>".$hotel2->get_nom_hotel() . " **** " . $hotel2->get_ville_hotel()."</h1>";
    "<p>".$hotel2->nombre_reservation() ."</p>";



    // booking for a specific hotel
    echo "<h4> Réservations de l'hôtel " .$hotel1->get_nom_hotel() . " **** " . $hotel1->get_ville_hotel()."</h4>",
    "<p>".$reservation1."</p>";


    // booking of one client
    echo "<h4>Réservation de </h4>",
    $client1 -> afficherReservations() ."</br>";
    $hotel1 -> PrixTotal();


    // status info of the hotel rooms in the hotel Hitlon in a table
    echo "<p> Statuts des chambres de <b>".$hotel1->get_nom_hotel() . " **** " . $hotel1->get_ville_hotel()."</b></p>";
    echo "<table  class='uk-table uk-table-striped'>",
            "<thead>",
                "<tr>",
                    "<th>CHAMBRES</th>",
                    "<th>PRIX</th>",
                    "<th>WIFI</th>",
                    "<th>ETAT</th>",
                "</tr>",
            "</thead>",
            "<tbody>";

            // auto increment from the array $chambres
            foreach ($chambres as $chambre){
                echo "<tr>",
                        "<td> Chambre ". $chambre->get_numero_chambre(). "</td>",
                        "<td>". $chambre->get_prix_chambre(). "</td>",
                        "<td>" . $chambre->get_wifi()."</td>",
                        "<td>" . $chambre->get_etat_chambre()."</td>",
                    "</tr>";
            } 

                "</tbody>";
                "</table>";
        

   ?>
</body>

</html>
