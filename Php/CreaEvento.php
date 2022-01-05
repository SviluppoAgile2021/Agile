<?php


class CreaEvento
{
    //da ricavare-inserire : idLuogo,idGruppo,idGenere
    public function creazioneEvento($nome, $id_luogo, $id_gruppo, $capienza, $id_genere, $formale, $prezzo, $offerta, $data_evento, $debug) : array
    {

        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }
		
		$clausole = [false, false]; // [val_capienza, val_resto]
	
	    $queryCap = "SELECT capienza_max FROM Luoghi WHERE id = '$id_luogo'";
	    $risultato = mysqli_query($conn, $queryCap);
	    $riga = mysqli_fetch_array($risultato);
		
		if ($capienza == 0){
			$capienza = $riga[0];       //inserisco il valore di default della capienza massima (cioè la capienza massima del luogo)
			$clausole[0] = TRUE;        //metto un flag per indicare che ho cambiato la variabile di capienza_max
		} elseif($capienza > $riga[0]){
			echo "La capienza inserita supera la capienza massima del luogo";
			return $clausole;               //non faccio eseguire la query di aggiunta dell'evento
		}


        $query = "INSERT INTO Eventi(nome, id_luogo, id_gruppo, capienza, id_genere, prezzo, formale, offerta, data_evento) VALUES ('$nome','$id_luogo','$id_gruppo', '$capienza', '$id_genere', '$prezzo','$formale', '$offerta', '$data_evento')";
        $risultato = mysqli_query($conn, $query);
        if ($risultato === FALSE) {
            echo(mysqli_error($conn));
            mysqli_close($conn);
			$clausole[1] = FALSE;
            return $clausole;
        } else {
            mysqli_close($conn);
			$clausole[1] = TRUE;
            return $clausole;
        }
    }

}

