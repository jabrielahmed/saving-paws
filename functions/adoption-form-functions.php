<?php

include '/var/www/students/lorenk45/saving-paws/saving-paws/database/database.php';

function getAllCats() {
    $conn = db_connect();
    $result = $conn->query("SELECT Name, Id FROM Animals WHERE IsDog = 0");
    return $result->fetchAll(PDO::FETCH_ASSOC);;
}