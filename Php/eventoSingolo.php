<?php
include("ConnectionDB.php");
$q = "select e.nome as nome_evento,e.data_evento,e.capienza,e.prezzo,e.offerta,e.formale,l.nome,l.citta,l.indirizzo,g.nome as genere
from Eventi e join Luoghi l on (l.id=e.id_luogo)
join Generi g on (e.id_genere=g.id) 
where e.id=1";
$ris = mysqli_query($conn, $q);
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeEvento = $rigaCorrente['nome_evento'];
    $capienza = $rigaCorrente['capienza'];
    $data = $rigaCorrente['data_evento'];
    $prezzo = $rigaCorrente['prezzo'];
    $offerta = $rigaCorrente['offerta'];
    $formale = $rigaCorrente['formale'];
    $luogo = $rigaCorrente['nome'];
    $citta = $rigaCorrente['citta'];
    $indirizzo = $rigaCorrente['indirizzo'];
    $genereEvento = $rigaCorrente['genere'];

    //operazioni di manipolazione dei dati
    if($formale==1){
        $formale="Si";
    }else{
        $formale="No";
    }
    if($offerta==1){
        $offerta="Si";
    }else{
        $offerta="No";
    }

    $d = substr($data,-19,10);
    $time = substr($data,-8,8);
    if($a==1){
        echo $nomeEvento;
    }
    if($a==2){
        echo $d;
    }
    if($a==3){
        echo $citta."<br>";
        echo $indirizzo;
    }
    if($a==4){
        echo $genereEvento;
    }
    if($a==5){
        echo $capienza;
    }
    if($a==6){
        echo $formale;
    }
    if($a==7){
        echo $offerta;
    }
    if($a==8){
        echo $luogo;
    }
    if($a==9){
        echo $time;
    }



}
mysqli_close($conn);
