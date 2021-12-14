<?php
	session_start();
	
	class Signup {
		
		public function signup ($nome, $cognome, $nome_utente, $password_utente, $data_nascita, $citta, $debug){
			//controllo della variabile di debug per connettersi al db per testing
			if($debug === TRUE){
				include("DebugConnectionDB.php");
			} elseif ($debug === FALSE){
				include("ConnectionDB.php");
			}
			
			//controllo che non ci sia già un utente con lo stesso username
			$query = "SELECT * FROM Utenti WHERE username = '$nome_utente'";
			
			$result = mysqli_query($conn, $query);
			$num = mysqli_num_rows($result);
			
			if($num != 0){
				if($debug == TRUE){
					echo "Trovati ". $num . " utenti";
				}
				mysqli_close($conn);
				return false;
			} else {
				$query_reg = "INSERT INTO Utenti (nome,cognome,data_nascita,citta,username, pwd) VALUES ('$nome', '$cognome', '$data_nascita', '$citta', '$nome_utente', '$password_utente')";
                $result = mysqli_query($conn, $query_reg);
				mysqli_close($conn);
				return true;
			}
		}
	}