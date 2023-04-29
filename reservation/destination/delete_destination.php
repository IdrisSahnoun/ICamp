<?php
global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'DELETE FROM destination where id = :id'
    );
    $query->execute([
        'id' => $_GET['id']
    ]);
    header("Location: Destination.php"); // redirect to Reservation.php
    exit(); // ensure script execution stops here
} catch (PDOException $e) {
    $e->getMessage();
}
?>
