<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

$titolo = $_POST['titolo'];
$anno = $_POST['anno'];
$isbn = $_POST['isbn'];
$id_autore = $_POST['id_autore'];

$conn->query("INSERT INTO Libri (titolo, anno_pubblicazione, isbn, id_autore)
VALUES ('$titolo', $anno, '$isbn', $id_autore)");

echo "Libro inserito!";
?>