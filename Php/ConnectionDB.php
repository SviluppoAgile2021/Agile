<?php

//Negli script in cui si vuole utilizzare la connessione al db bisogna fare include("connectionDB.php");
//all'inizio dello script. Terminate le operazioni la connessione va chiusa  con mysqli_close($conn); ed
//eventualmente per terminare lo script in sicurezza con die("Ciao mondo");

$hostname="sport-e-alimentazione.it";
$username="sporteal_agile2021";
$password="Agile2021";
$dbname="sporteal_agile2021";
$usertable="Utenti";

$conn = new mysqli($hostname, $username, $password); //oggetto connessione

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
mysqli_select_db($conn, $dbname); //Selezione del database