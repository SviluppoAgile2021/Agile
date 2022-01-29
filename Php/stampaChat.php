<?php
include("ConnectionDB.php");
$ris = mysqli_query($conn, "SELECT * from Chat c JOIN Utenti u WHERE c.id_utente = u.id");
while ($rigaCorrente = $ris->fetch_array()) {
    $nomeUtente = $rigaCorrente['nome'];
    $cognomeUtente = $rigaCorrente['cognome'];
    $id = $rigaCorrente['id'];
    $messaggioUtente = $rigaCorrente['messaggio'];

    echo <<<EOL
<div class="comment-content">
                                <div class="admin-name mb-15">
                                    <div class="name">
                                        <h5>$nomeUtente $cognomeUtente</h5>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    <p class="mb-30">
                                        $messaggioUtente
                                    </p>
                                </div>
                            </div>
EOL;
}
mysqli_close($conn);
?>