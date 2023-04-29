<?php
global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'DELETE FROM reservation where id = :id'
    );
    $query->execute([
        'id' => $_GET['id']
    ]);
    header("Location: ../Reservation.php"); // redirect to Reservation.php
    exit(); // ensure script execution stops here
} catch (PDOException $e) {
    $e->getMessage();
}
?>
