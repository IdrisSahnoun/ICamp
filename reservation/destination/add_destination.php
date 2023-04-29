<?php
require 'connection.php';

try {
    $query = $pdo->prepare(
        'INSERT INTO destination (name, location, activity_type)
        VALUES (:name, :location, :activity_type)'
    );
    $query->execute([
        'name' => $_POST['name'],
        'location' => $_POST['location'],
        'activity_type' => $_POST['activity_type']
    ]);
//    $query->execute([
//        'namee' => "ggegeq",
//        'location' => "dqdq",
//        'activity_type' => "hehehh"
//    ]);
    echo 'Destination created successfully.';
} catch (PDOException $e) {
    error_log("Error creating reservation: " . $e->getMessage(), 0);
    echo 'There was an error creating your destination. Please try again later.';
}
header("Location: Destination.php");
exit();
?>
