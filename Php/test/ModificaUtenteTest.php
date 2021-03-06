<?php

use PHPUnit\Framework\TestCase;

include("Php/ModificaUtente.php");

class ModificaUtenteTest extends TestCase
{
    private ModificaUtente $utente;

    public function testModificaUtente()
    {
        $utente = new ModificaUtente();
        //verifica se l'Utente esistente viene modificato correttamente
        $res = $utente->modificaUtente(12,"Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12Nuova", true);
        $this->assertTrue($res);

        //verifica sull'Utente NON esistente
        $res = $utente->modificaUtente(200,"Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12", true);
        $this->assertFalse($res);

        //verifica sull'ID "null"
        $res = $utente->modificaUtente(null, "Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12", true);
        $this->assertFalse($res);
    }
}