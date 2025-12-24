<?php
$mysqli = new mysqli("localhost", "root", "", "ajaxbd");

if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
}

$query = "SELECT * FROM personas";
$datos = [];

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = [$row['id'], $row['nombres'], $row['apellidos']];
    }
    $result->free();
}

$mysqli->close();

header('Content-Type: application/json');

echo json_encode($datos);
