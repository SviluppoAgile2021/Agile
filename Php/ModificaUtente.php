<?php

class ModificaUtente
{

    public function modificaUtente($id, $nome, $cognome, $data_nascita, $citta, $username, $pwd, $debug): bool
    {
        if ($debug === true) {
            include("DebugConnectionDB.php");
        } elseif ($debug === false) {
            include("ConnectionDB.php");
        }

        if ($id == null) {
            echo "Errore: ID Utente non valido!";
            return false;
        }

        //creazione query dati escape
        $query = "UPDATE Utenti(nome, cognome, data_nascita, citta, username, pwd) SET ('$nome','$cognome','$data_nascita', '$citta', '$username', '$pwd') WHERE id='$id'";
        $debugQuery = $query;
        echo "\n" . $debugQuery;

        $res = mysqli_query($conn, $query);
        if ($res === false) {
            echo "F";
            echo(mysqli_error($conn));
            mysqli_close($conn);
            return false;
        } else {
            echo "\nT";
            echo("\nDati Utente aggiornati con successo.");
            mysqli_close($conn);
            return true;
        }
    }
}