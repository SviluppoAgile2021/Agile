<?php
include "Login.php";
$login = new Login();
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username) && isset($password)){
    $login->loginUtente($username, $password, false);
}