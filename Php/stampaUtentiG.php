<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT id,username FROM Utenti");
while ($rigaCorrente = $ris->fetch_array()) {
    $utenti = $rigaCorrente['username'];
    $id = $rigaCorrente['id'];
    echo "<option value=\"$id\"> $utenti </option>";
}
mysqli_close($conn);