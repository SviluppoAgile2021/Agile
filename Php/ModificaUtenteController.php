<?php

include("ModificaUtente.php");

    if (isset($_POST["username"])) {
        modificaUtente($_POST["id"], $_POST["nome"], $_POST["cognome"], $_POST["data_nascita"], $_POST["citta"], $_POST["username"], $_POST["pwd"], false);
    } else {
    echo "Errore: impossibile modificare l'Utente";
    }
