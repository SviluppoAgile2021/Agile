<?php
include("connectionDB.php");

$query = "SELECT Eventi.nome, Eventi.data_evento, Eventi.id_luogo FROM Eventi";


$res = mysqli_query($conn, $query);
if($res === FALSE){
    die(mysqli_error($conn));
}


if(!empty($res)){
    $res = @mysqli_query($conn, $query);
    echo "<table>\n";
    while ($entry = mysqli_fetch_array($res))
    {
        echo "<tr>\n";
        echo "<td>". $entry['nome']."</td>";
        echo "<td>". $entry['data_evento']."</td>";
        echo "<td>". $entry['id_luogo']."</td>";
        echo "</tr>\n";
    }
}
else {
    echo("Nessun evento risulta disponibile al momento.");
}