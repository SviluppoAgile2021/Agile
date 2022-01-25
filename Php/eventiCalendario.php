<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT nome,data_evento FROM Eventi");
while ($rigaCorrente = $ris->fetch_array()) {
    $nome = $rigaCorrente['nome'];
    $dataOra = $rigaCorrente['data_evento'];

    $data = substr($dataOra,-19,10);
    //$time = substr($dataOra,-8,8);

    echo "{
        title: \"$nome\",
        start: \"$data\"
    },";
}
mysqli_close($conn);

