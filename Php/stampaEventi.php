<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT id,nome,formale FROM Eventi");
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeEvento = $rigaCorrente['nome'];
    $id = $rigaCorrente['id'];
    $formale = $rigaCorrente['formale'];
    echo "<option value='$id.$formale'> $nomeEvento </option>";
}

mysqli_close($conn);

