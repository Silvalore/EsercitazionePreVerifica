<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

$id_libro = $_POST['id_libro'];
$id_utente = $_POST['id_utente'];
$inizio = $_POST['inizio'];
$fine = $_POST['fine'];

$conn->query("INSERT INTO Prestiti (id_libro, id_utente, data_inizio, data_fine_prevista)
VALUES ($id_libro, $id_utente, '$inizio', '$fine')");

echo "Prestito registrato!";
?>