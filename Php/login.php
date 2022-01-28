<?php
class Login
    {
        public function loginUtente($usernameInp, $passwordInp, $debug): bool
        {
            if ($debug === TRUE) {
                include("DebugConnectionDB.php");
            } elseif ($debug === FALSE) {
                include("ConnectionDB.php");
            }

            $query = "SELECT * FROM Utenti WHERE username = '$usernameInp' AND pwd = '$passwordInp'";

            if (isset($conn)) {
                $result = mysqli_query($conn, $query);
                $num = mysqli_num_rows($result);
            }
            if ($num == 1) {
                session_start();
                $userArray = mysqli_fetch_array($result);
                $_SESSION['username'] = $usernameInp;
               // $_SESSION['password'] = $passwordInp;
                $_SESSION['id'] = $userArray['id'];
                //$conn->close();
                //header('location: ../pages/eventiSuggeriti.php');  //qui bisogna mettere il path della home
                return true;
                exit();
            } else {
                echo "login errato";
                return false;
            }
        }
    }
?>