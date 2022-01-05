<?php
include("IscrivitiEvento.php");
if(isset($_POST['evento'])){
    $idConcatenato = $_POST['evento']; //valore del tipo 5.0 oppure 6.1
    $idUtente = "8"; //IMPORTANTE : l'id dell'utente mi deve essere passato dalla sessione quando ho fatto il login

    $formale = substr($idConcatenato,-1,1);
    if($formale==1){
        echo "L'evento è un evento formale, contatta l'organizzatore qui : pinco@pallino.mail.it";
        exit;
    }
    $idEvento=substr($idConcatenato,0,1);
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