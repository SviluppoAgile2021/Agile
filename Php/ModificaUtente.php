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
        $query = "UPDATE Utenti SET nome='$nome', cognome='$cognome', data_nascita='$data_nascita', citta='$citta', username='$username', pwd='$pwd' WHERE id='$id'";

        if (isset($conn)) {
            $res = mysqli_query($conn, $query);
            $num = mysqli_affected_rows($conn);
        }
        if ($num == 1) {
            echo "\nT";
            echo("\nDati Utente aggiornati con successo.");
            mysqli_close($conn);
            return true;
        }
        else {
            return false;
        }
    }
}