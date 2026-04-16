<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

$id = $_GET['id'];

$conn->query("UPDATE Prestiti SET restituito = TRUE WHERE id_prestito = $id");

header("Location: prestiti_utente.php");
?>