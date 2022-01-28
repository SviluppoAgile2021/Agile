<?php
/* Set e-mail recipient */
class Chat
{
    public function addChat($chatInp, $idUtenteInp, $debug): bool
    {
        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }


        /* If e-mail is not valid show error message
        if (!filter_var($emailInp, FILTER_VALIDATE_EMAIL)) {
            // invalid e-mail address
            echo "Email non valida";*/
        $chatInp = mysqli_real_escape_string($conn,$chatInp);


        $query = "INSERT INTO Chat(id_utente,messaggio)
                  VALUES ('$idUtenteInp','$chatInp')";
        echo $query;

        if (isset($conn)) {
            mysqli_query($conn, $query);
            return true;
        }
        else{
            return false;
        }

    }
}

