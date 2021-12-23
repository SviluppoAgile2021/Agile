<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT id,nome FROM Eventi");
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeEvento = $rigaCorrente['nome'];
    $id = $rigaCorrente['id'];
    echo "<option value=\"$id\"> $nomeEvento </option>";
}

mysqli_close($conn);

