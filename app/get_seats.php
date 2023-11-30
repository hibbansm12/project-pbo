<?php

$db = new mysqli('localhost', 'root', '', 'ticketing_bus');

$seats = array();
$result = $db->query("SELECT kode_kursi FROM status_kursi");

while ($row = $result->fetch_assoc()) {
    $seats[] = $row;
}

header('Content-Type: application/json');
echo json_encode($seats);
