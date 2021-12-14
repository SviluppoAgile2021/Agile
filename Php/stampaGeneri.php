<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT id,nome FROM Generi");
while ($rigaCorrente = $ris->fetch_array()) {
    $generi = $rigaCorrente['nome'];
    $id = $rigaCorrente['id'];
    echo "<option value=\"$id\"> $generi </option>";
}
mysqli_close($conn);
