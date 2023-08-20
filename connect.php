<?php
$host = 'localhost';
$user = 'filial042';
$pass = 'senhafilial';
$db = 'atc_portal';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>