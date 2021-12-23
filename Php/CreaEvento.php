<?php


class CreaEvento
{
    //da ricavare-inserire : idLuogo,idGruppo,idGenere
    public function creazioneEvento($nome, $id_luogo, $id_gruppo, $capienza, $id_genere, $formale, $prezzo, $offerta, $data_evento, $debug): bool
    {

        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }
        //dunque se la capienza inserita è pari a zero, si prende tutta la capienza disponibile
        if ($capienza == 0) {
            $risultato = mysqli_query($conn, "SELECT capienza_max FROM Luoghi WHERE id='$id_luogo'");
            $row = mysqli_fetch_array($risultato);
            $capienza = $row[0];
        }

        if ($capienza > 0) {
            $risultato = mysqli_query($conn, "SELECT capienza_max FROM Luoghi WHERE id='$id_luogo'");
            $row = mysqli_fetch_array($risultato);
            if($capienza>$risultato){
                echo"La capienza inserita eccede quella massima";
            }
        }


        //creazione query con i dati con escape
        $query = "INSERT INTO Eventi(nome, id_luogo, id_gruppo, capienza, id_genere, prezzo, formale, offerta, data_evento) VALUES ('$nome','$id_luogo','$id_gruppo', '$capienza', '$id_genere', '$prezzo','$formale', '$offerta', '$data_evento')";
        $risultato = mysqli_query($conn, $query);
        //$riga = mysqli_fetch_assoc($risultato);
        if ($risultato === FALSE) {
            //echo "\nEvento non creato";
            echo(mysqli_error($conn));
            mysqli_close($conn);
            return false;
        } else {
            //echo("\nEvento creato con successo");
            mysqli_close($conn);
            return true;
        }
    }

}

