<?php
$silva_bibilioteca = new mysqli("localhost", "root", "", "biblioteca");

// Recupero autori
$autori = $silva_bibilioteca->query("SELECT * FROM Autori");
?>

<form method="POST" action="salva_libro.php">
    Titolo: <input type="text" name="titolo"><br>
    Anno: <input type="number" name="anno"><br>
    ISBN: <input type="text" name="isbn"><br>

    Autore:
    <select name="id_autore">
        <?php while($a = $autori->fetch_assoc()): ?>
            <option value="<?= $a['id_autore'] ?>">
                <?= $a['nome'] . " " . $a['cognome'] ?>
            </option>
        <?php endwhile; ?>
    </select>

    <button type="submit">Salva</button>
</form>