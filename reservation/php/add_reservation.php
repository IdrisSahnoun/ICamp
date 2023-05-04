<?php
require 'connection.php';

$phone_number = $_POST['phone_number'];
$person_count = $_POST['person_count'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$destination = $_POST['destination'];
$requete = "INSERT INTO reservation 
    (phone_number, person_count, start_date, end_date, destination) 
VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($requete);


if ($stmt->execute([$phone_number, $person_count, $start_date, $end_date, $destination])) {
    //echo "<h1>INSERTION AVEC SUCCESS</h1>";

} else {
    echo "<h1>Erreur d'insertion</h1>";
}
header("Location: ../Reservation.php");
exit();
?>
