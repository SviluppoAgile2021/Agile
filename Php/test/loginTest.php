<?php

require("Php/login.php");
use PHPUnit\Framework\TestCase;

class loginTest extends TestCase
{
    public function testLogin()
    {
        $login = new Login();
        //Utente esistente e sessione (problemi testing sessione)
        //$this->assertTrue($login->loginUtente("utente1","utente1"));
        //Utente non esistente
        $this->assertFalse($login->loginUtente("asdfgh","edrjygfd", true));
        //Utente esistente, password sbagliata
        $this->assertFalse($login->loginUtente("utente1","utente14", true));
        //Utente non esistente, password giusta
        $this->assertFalse($login->loginUtente("utente14","utente1", true));

        //testing escape
        $this->assertFalse($login->loginUtente("/r","select * from Utenti", true));
        $this->assertFalse($login->loginUtente(".","\n", true));
    }
}
