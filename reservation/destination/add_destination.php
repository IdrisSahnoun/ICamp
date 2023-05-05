<?php
require 'connection.php';

if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['type'];
    $filesize = $_FILES['image']['size'];
    $filetmp = $_FILES['image']['tmp_name'];
    $data = file_get_contents($filetmp);

    try {
        $query = $pdo->prepare(
            'INSERT INTO destination (name, location, activity_type, rating, image)
      VALUES (:name, :location, :activity_type, :rating, :image)'
        );
        $query->bindParam(':name', $_POST['name']);
        $query->bindParam(':location', $_POST['location']);
        $query->bindParam(':activity_type', $_POST['activity_type']);
        $query->bindParam(':rating', $_POST['rating']);
        $query->bindParam(':image', $data, PDO::PARAM_LOB);
        $query->execute();
        echo 'Destination created successfully.';
    } catch (PDOException $e) {
        error_log("Error creating destination: " . $e->getMessage(), 0);
        echo 'There was an error creating your destination. Please try again later.';
    }
} else {
    echo 'There was an error uploading your file. Please try again later.';
}
header("Location: Destination.php");
exit();
?>
