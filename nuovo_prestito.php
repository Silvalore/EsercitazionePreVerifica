<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

$libri = $conn->query("SELECT * FROM Libri");
$utenti = $conn->query("SELECT * FROM Utenti");
?>

<form method="POST" action="salva_prestito.php">

Libro:
<select name="id_libro">
<?php while($l = $libri->fetch_assoc()): ?>
    <option value="<?= $l['id_libro'] ?>">
        <?= $l['titolo'] ?>
    </option>
<?php endwhile; ?>
</select>

Utente:
<select name="id_utente">
<?php while($u = $utenti->fetch_assoc()): ?>
    <option value="<?= $u['id_utente'] ?>">
        <?= $u['nome'] . " " . $u['cognome'] ?>
    </option>
<?php endwhile; ?>
</select>

Data inizio: <input type="date" name="inizio">
Data fine: <input type="date" name="fine">

<button type="submit">Registra prestito</button>
</form>