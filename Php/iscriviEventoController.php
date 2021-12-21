<?php
include("IscrivitiEvento.php");
if(isset($_POST['evento'])){
    $idEvento = $_POST['evento'];
    $idUtente = "8"; //IMPORTANTE : l'id dell'utente mi deve essere passato dalla sessione quando ho fatto il login

    $Obj = new IscrivitiEvento();
    $result = $Obj->iscriviti($idEvento,$idUtente,false);
    if($result==true){
        echo "Iscritto con successo all'evento";
    }else{
        echo "Errore";
    }
}else{
    //anche se vi sono i required, i controlli sul server andrebbero sempre fatti
    echo "Alcuni valori sono vuoti, per favore ricontrolla i campi";
}