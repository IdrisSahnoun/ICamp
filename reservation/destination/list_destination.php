<?php
global $pdo;
require 'connection.php';
try {
    $query = $pdo->prepare(
        'SELECT * FROM destination'
    );
    $query->execute();
    $result = $query->fetchAll();
//    var_dump($result);
} catch (PDOException $e) {
    $e->getMessage();
}
//var_dump($result);

?>

