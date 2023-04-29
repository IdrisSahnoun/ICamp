<?php
global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'UPDATE reservation SET
                       phone_number = :phone_number,
                       person_count = :person_count,
                       start_date = :start_date,
                       end_date = :end_date
                       WHERE id=:id'
    );
    $query->execute([
        'id' => $_POST['id'],
        'phone_number' => $_POST['phone_number'],
        'person_count' => $_POST['person_count'],
        'start_date' => $_POST['start_date'],
        'end_date' => $_POST['end_date'],
    ]);

    // Redirect to Reservation.php page after the update is done
    header("Location: ../Reservation.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
