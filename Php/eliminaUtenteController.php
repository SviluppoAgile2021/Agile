<?php
include("EliminaUtente.php");

if(isset($_POST['id'])){
    $elemEliminaUtente = new EliminaUtente();
    $ris = $elemEliminaUtente->eliminaUtente($_POST['id'], false);
} else{
    echo "Errore: impossibile eliminare un utente";
}