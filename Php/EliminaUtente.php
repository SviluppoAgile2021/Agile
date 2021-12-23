<?php

class EliminaUtente
{
    public function eliminaUtente($id, $debug) : bool
    {
        if($debug === TRUE){
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE){
            include("ConnectionDB.php");
        }

        if ($id == null) {
            echo "Errore: id non valido!";
            return false;
        }

        $query = "DELETE FROM Utenti WHERE 'id' = '$id'";

        //$dbgQuery = $query;
        //echo "\n".$dbgQuery;
        //mysqli_select_db($conn, $dbname);

        $risultato = mysqli_query($conn, $query);
        //$riga = mysqli_fetch_assoc($risultato);
        if ($mysqli_num_rows($risultato) == 0) {
            echo "Error";
            echo(mysqli_error($conn));
            mysqli_close($conn);
            return false;
        } else {
            echo "\nT";
            echo("\nUtente eliminato con successo.");
            mysqli_close($conn);
            return true;
        }
    }
}