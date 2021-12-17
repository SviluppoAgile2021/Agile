<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT id,nome FROM Luoghi");
while ($rigaCorrente = $ris->fetch_array()) {
    $luogo = $rigaCorrente['nome'];
    $id=$rigaCorrente['id'];
    echo "<option value=\"$id\"> $luogo </option>";
}
mysqli_close($conn);
