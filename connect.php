<?php
$dbhost="localhost";
$dbname="atc_portal";
$usuario="filial042";
$password="senhafilial";

$db = new mysqli($dbhost, $usuario, $password, $dbname) or die ('não foi possivel conectar');

?>