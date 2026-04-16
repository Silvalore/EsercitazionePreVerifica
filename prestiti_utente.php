<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");

// Menu utenti
$utenti = $conn->query("SELECT * FROM Utenti");
?>

<form method="GET">
    Seleziona utente:
    <select name="id_utente">
        <?php while($u = $utenti->fetch_assoc()): ?>
            <option value="<?= $u['id_utente'] ?>">
                <?= $u['nome'] . " " . $u['cognome'] ?>
            </option>
        <?php endwhile; ?>
    </select>
    <button type="submit">Mostra</button>
</form>

<?php
if(isset($_GET['id_utente'])){
    $id = $_GET['id_utente'];

    $query = "
    SELECT p.*, l.titolo 
    FROM Prestiti p
    JOIN Libri l ON p.id_libro = l.id_libro
    WHERE p.id_utente = $id
    ";

    $ris = $conn->query($query);

    while($row = $ris->fetch_assoc()){
        echo $row['titolo'] . " - ";

        if(!$row['restituito']){
            echo "<a href='restituisci.php?id=".$row['id_prestito']."'>Restituisci</a>";
        } else {
            echo "Restituito";
        }

        echo "<br>";
    }
}
?>