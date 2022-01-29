<?php
include("ConnectionDB.php");
$q = "select e.id as id_evento, e.nome as nome_evento,e.data_evento,e.capienza,e.prezzo,e.offerta,e.formale,l.nome,l.citta,l.indirizzo,g.nome as genere
from Eventi e join Luoghi l on (l.id=e.id_luogo)
join Generi g on (e.id_genere=g.id) 
where e.id='". $id ."'";
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
    $idEvento = $rigaCorrente['id_evento'];


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
    if($a==10){
        echo "  <span class='start'>$d $time </span>
                <span class='end'>$d </span>
                <span class='timezone'>Europe/Rome</span>
                <span class='title'>$nomeEvento</span>
                <span class='description'>Evento $genereEvento</span>
                <span class='location'>$luogo $indirizzo</span>
                <span class='organizer'>Organizer</span>
                <span class='organizer_email'>organizzazione@email.com</span>
                <span class='all_day_event'>false</span>
                <span class='date_format'>YYYY/MM/DD</span>";
    }
    if($a==11){
        echo"<input type='number' name='id_evento' value=$idEvento readonly required hidden>";
    }

}
mysqli_close($conn);
