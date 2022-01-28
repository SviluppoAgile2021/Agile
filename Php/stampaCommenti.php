<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn,"SELECT *
from Commenti c JOIN Utenti u ON c.id_utente = u.id
where id_evento = $id;");
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeUtente = $rigaCorrente['nome'];
    $cognomeUtente = $rigaCorrente['cognome'];

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

