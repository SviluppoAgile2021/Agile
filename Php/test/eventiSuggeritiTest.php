<?php


use PHPUnit\Framework\TestCase;

class eventiSuggeritiTest extends TestCase
{
    public function suggerire()
    {
        $eventiSuggeriti = new eventiSuggeriti();

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
