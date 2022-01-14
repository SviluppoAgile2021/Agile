<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT CONCAT (cognome,' ',nome) as nome, id FROM Utenti");
while ($rigaCorrente = $ris->fetch_array()) {
    $user = $rigaCorrente['nome'];
    $id = $rigaCorrente['id'];
    echo "<option value=\"$id\"> $user </option>";
}
mysqli_close($conn);
