<?php

include '/var/www/students/team8/saving-paws/database/database.php';

/*echo '<pre>';
var_dump($GLOBALS);
echo '</pre>';*/

function getAllCats() {
    $conn = db_connect();
    $result = $conn->query("SELECT Name, Id FROM Animals WHERE IsDog = 0");
    return $result->fetchAll(PDO::FETCH_ASSOC);;
}

function getAllDogs() {
    $conn = db_connect();
    $result = $conn->query("SELECT Name, Id FROM Animals WHERE IsDog = 1");
    return $result->fetchAll(PDO::FETCH_ASSOC);;
}

function processForm() {
    $middleInitial = $_POST["MiddleInitial"];
}

function formatMiddleInitial($middleInitial) {
    return strtoupper($middleInitial);
}

function formatPhone($phone) {
    $phone = str_replace("(","",$phone);
    $phone = str_replace(")","",$phone);
    $phone = str_replace("-","",$phone);
    return $phone;
}

function formatYesNo($response) {
    return $response == "Yes"?1:0;
}