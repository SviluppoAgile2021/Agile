<?php
include "../Php/eventiSuggeriti.php";
$eventiSuggeriti = new eventiSuggeriti();

    $usernameEv = $_SESSION['username'];
    $passwordEv = $_SESSION['password'];

$eventiSuggeriti->suggerire($usernameEv, $passwordEv, false);
?>