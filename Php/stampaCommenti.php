<?php
include("ConnectionDB.php");
 $idEvento = 1;
$ris = mysqli_query($conn,"SELECT *
from Commenti c JOIN Utenti u ON c.id_utente = u.id
where id_evento = $idEvento;");
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeUtente = $rigaCorrente['nome'];
    $cognomeUtente = $rigaCorrente['cognome'];
    $id = $rigaCorrente['id'];
    $commentoUtente = $rigaCorrente['commento'];

    echo <<<EOL
<div class="comment-content">
                                    <div class="admin-name mb-15">
                                        <div class="name">
                                            <a href="#!"> $nomeUtente $cognomeUtente</a>
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                    $commentoUtente
                                    </div>
                                </div>
EOL;

}
mysqli_close($conn);
?>

