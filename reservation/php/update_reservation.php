<?php
require 'connection.php';

$id = $_POST['id'];
$phone_number = $_POST['phone_number'];
$person_count = $_POST['person_count'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$requete= "UPDATE reservation SET phone_number=?, person_count=?, start_date=?, end_date=? WHERE id=:id";
$stmt = $pdo->prepare($requete);
if($stmt->execute([
    'id' => $_POST['id'],$phone_number, $person_count, $start_date, $end_date])){
    //echo "<h1>MODIFICATION AVEC SUCCESS</h1>";
}else{
    echo "<h1>Erreur de modification</h1>";
}
header("Location: ../Reservation.php");
exit();
?>
