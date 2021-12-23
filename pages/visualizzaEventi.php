<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        html {
            font-family: Verdana;
        }
        table, tr, td {
            border: 1px solid #FD6945;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr, td {
            padding: 15px;
        }
    </style>
    <title>Tutti Gli Eventi Disponibili</title>
</head>
<body>
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
?>
</body>
</html>