<?php

class IscrivitiEvento
{
    public function iscriviti($idEvento, $idUtente, $debug): bool
    {

        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }

        //iscriviamo l'utente all'evento aggiungendo una riga nella tabella partecipano
        $query = " INSERT INTO partecipano (`id_utente`, `id_evento`) VALUES ('$idUtente', '$idEvento');";
        $risultato = mysqli_query($conn, $query);
        if ($risultato === FALSE) {
            echo(mysqli_error($conn));
            mysqli_close($conn);
            return false;
        } else {
            mysqli_close($conn);
            return true;
        }
    }
}