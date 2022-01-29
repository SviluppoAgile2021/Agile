<?php
session_start();
include "contact.php";
$comments = new Contact();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $comment = $_POST['comment'];
    $idEvento = $_POST['id_evento'];
    $idUtente = $_SESSION['id'];

}
    $comments->addComment($comment,$idEvento, $idUtente, false);
   // header('location: ./contact.php');
