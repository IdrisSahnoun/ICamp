<?php
global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'SELECT * FROM reservation'
    );
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e) {
    $e->getMessage();
}
//var_dump($result);
?>

