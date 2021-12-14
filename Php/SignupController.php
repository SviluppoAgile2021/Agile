<?php

	include "Signup.php";
	$p_nome = $_POST['name'];
	$p_cognome = $_POST['surname'];
	$p_nome_utente = $_POST['username'];
	$p_password = $_POST['password'];
	$p_data = $_POST['birthdate'];
	$p_citta = $_POST['city'];
	if(!(empty($p_nome) || empty($p_cognome) || empty($p_nome_utente) || empty($p_password) || empty($p_data) || empty($p_citta))){
		signup($p_nome, $p_cognome, $p_nome_utente, $p_password, $p_data, $p_citta, FALSE);
		echo "Registrazione completata";
	} else {
		echo "Uno o più campi sono vuoti, la registrazione non è stata completata";
	}