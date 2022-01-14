<?php
include("EliminaUtente.php");

if(isset($_POST['utente'])){
    $elemEliminaUtente = new EliminaUtente();
    $ris = $elemEliminaUtente->eliminaUtente($_POST['utente'], false);
} else{
    echo "Errore: impossibile eliminare un utente" .$_POST['utente'];
}