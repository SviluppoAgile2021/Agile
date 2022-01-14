<?php
include "Login.php";
$login = new Login();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    if(isset($username) && isset($password)){
        $login->loginUtente($username, $password, false);
        header('location: ../Template/event-1.html');  // home
    }