<?php
class Chat
{
    public function addChat($chatInp, $idUtenteInp, $debug): bool
    {
        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }

        $chatInp = mysqli_real_escape_string($conn,$chatInp);


        $query = "INSERT INTO Chat(id_utente,messaggio)
                  VALUES ('$idUtenteInp','$chatInp')";

        if (isset($conn)) {
            mysqli_query($conn, $query);
            return true;
        }
        else{
            return false;
        }

    }
}

