<?php
session_start();
include "chat.php";
$chats = new Chat();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $messaggio = $_POST['messaggio'];
    $idUtente = $_SESSION['id'];

}
$chats->addComment($messaggio, $idUtente, false);