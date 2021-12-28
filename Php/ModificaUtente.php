<?php

class ModificaUtente
{

    public function modificaUtente($id, $nome, $cognome, $data_nascita, $citta, $username, $pwd, $debug): bool
    {
        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }

        //creazione query dati escape
        $query = "UPDATE Utenti(nome, cognome, data_nascita, citta, username, pwd) SET ('$nome','$cognome','$data_nascita', '$citta', '$username', '$pwd') WHERE id='$id'";
        $debugQuery = $query;
        echo "\n" . $debugQuery;

        $risultato = mysqli_query($conn, $query);
        if ($risultato === FALSE) {
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