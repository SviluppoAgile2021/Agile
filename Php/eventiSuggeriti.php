<?php
session_start();
class eventiSuggeriti{
    public function suggerire ($usernameEv, $passwordEv, $debug){

        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }
        $queryEventiUtente= "
                        SELECT  *
                        FROM partecipano
                        inner join Utenti on partecipano.id_utente=Utenti.id
                        inner join Eventi on partecipano.id_evento = Eventi.id
                        where username = '$usernameEv' AND pwd ='$passwordEv' "; //restituisce tutti gli eventi di un utente
        echo $usernameEv;
        echo $passwordEv;
        if (isset($conn)) {
            $ris = mysqli_query($conn, $queryEventiUtente);
            while ($rigaCorrente = $ris->fetch_array()) {
                $idGenereEvento = $rigaCorrente['id_genere'];
                $queryEventiSugg = "SELECT Eventi.nome AS Titolo, Eventi.data_evento, Eventi.capienza, Eventi.prezzo
                        FROM Eventi
                        INNER JOIN Generi ON Eventi.id_genere = Generi.id
                        WHERE Eventi.id_genere = '$idGenereEvento'
                        LIMIT 5";
                $suggeriti = mysqli_query($conn, $queryEventiSugg);
                while($rigaCorrente2 = $suggeriti->fetch_array()){
                    $nome = $rigaCorrente2['Titolo'];
                    $dataEvento = $rigaCorrente2['data_evento'];
                    $capienza = $rigaCorrente2['capienza'];
                    $prezzo = $rigaCorrente2['prezzo'];
                    echo "<tr>";
                    echo "<td>$nome</td>";
                    echo "<td>$dataEvento</td>";
                    echo "<td>$capienza</td>";
                    echo "<td>$prezzo</td>";
                    echo "</tr>";
                }

            }


        }
    }
}



