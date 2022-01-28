<?php
/* Set e-mail recipient */
class Contact
{
    public function addComment($commentInp, $idEventoInp, $idUtenteInp, $debug): bool
    {
        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }


        $commentInp = mysqli_real_escape_string($conn,$commentInp);


        $query = "INSERT INTO Commenti(id_evento,id_utente,commento)
                  VALUES ('$idEventoInp','$idUtenteInp','$commentInp')";
        echo $query;

        if (isset($conn)) {
            mysqli_query($conn, $query);
            echo "ho eseguito la query";
            return true;
        }
        else{
            echo "sono nell'else";
            return false;
        }

    }
}

