<?php
include("CreaEvento.php");
include("AddAdmin.php");
if(isset($_POST['nomeEvento']) && isset($_POST['luogo']) && isset($_POST['data']) && isset($_POST['capienza'])
    && isset($_POST['prezzo']) && isset($_POST['formale']) && isset($_POST['offerta']) && isset($_POST['genere'])
    && isset($_POST['admin1']) && isset($_POST['admin2']) && isset($_POST['admin3'])){
    $nomeEvento = $_POST['nomeEvento'];
    $luogo = $_POST['luogo'];
    $data = $_POST['data'];
    $capienza = $_POST['capienza'];
    $prezzo= $_POST['prezzo'];
    $formale = $_POST['formale'];
    $offerta = $_POST['offerta'];
    $genere = $_POST['genere'];

    $idAdminPrincipale = 1;
    $idAdmin1 = $_POST['admin1'];
    $idAdmin2 = $_POST['admin2'];
    $idAdmin3 = $_POST['admin3'];

    $oggettoAdmin = new AddAdmin();
    $result2 = $oggettoAdmin->aggiungiAdmin($idAdminPrincipale,$idAdmin1,$idAdmin2,$idAdmin3,false);

    $OggettoEvento = new CreaEvento();
    $result = $OggettoEvento->creazioneEvento($nomeEvento,$luogo,1,$capienza,$genere,$formale,$prezzo,$offerta,$data,false);

    if($result==true AND $result2==true){
        echo "Evento creato con successo";
    }else{
        echo "Errore";
    }
}else{
    //anche se vi sono i required, i controlli sul server andrebbero sempre fatti
    echo "Alcuni valori sono vuoti, per favore ricontrolla i campi";
}
