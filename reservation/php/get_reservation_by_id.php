<?php
global $pdo;
require 'connection.php';

try {
    $query = $pdo->prepare(
        'SELECT * FROM reservation WHERE id=:id'
    );
    $query->execute([
        'id' => $_GET['id']
    ]);
    $result = $query->fetch();
} catch (PDOException $e) {
    $e->getMessage();
}

?>

