<?php
session_start();
include("ConnectionDB.php");

class Login
{
    public function loginUtente($usernameInp, $passwordInp, $debug) : bool
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $query = "SELECT * FROM Utenti WHERE username = '$username' AND pwd = '$password'";

            if (isset($conn)) {
                $result = mysqli_query($conn, $query);
                $num = mysqli_num_rows($result);
            }
            if ($num == 1) {

                session_start();

                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $conn->close();
                header('location: ../pages/welcome.html');  //qui bisogna mettere il path della home
                return true;
            } else {
                echo "login errato";
                return false;
            }
        }
        return false;
    }
}

?>