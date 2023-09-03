<?php

global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'UPDATE destination SET
                       name = :name,
                       location = :location,
                       WHERE id=:id'
    );
    $query->execute([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'location' => $_POST['location'],
        'rating' => $_POST['rating'],
    ]);
    header("Location: ../../Reservation.php");
    exit();

//    var_dump($query);
} catch (PDOException $e) {
    $e->getMessage();
}



