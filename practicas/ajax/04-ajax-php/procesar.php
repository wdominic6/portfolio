<?php
$mysqli = new mysqli("localhost", "root", "", "ajaxbd");

if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
}

$nombres = $_POST['nombres'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';

if ($nombres === '' || $apellidos === '') {
    die('Completa los campos requeridos.');
}

$stmt = $mysqli->prepare('INSERT INTO personas (nombres, apellidos) VALUES (?, ?)');
if (!$stmt) {
    die($mysqli->error);
}

$stmt->bind_param('ss', $nombres, $apellidos);
if (!$stmt->execute()) {
    die($stmt->error);
}

$stmt->close();
$mysqli->close();

echo 'Guardado con éxito';
