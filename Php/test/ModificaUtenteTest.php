<?php

use PHPUnit\Framework\TestCase;

include("Php/ModificaUtente.php");

class ModificaUtenteTest extends TestCase
{
    private ModificaUtente $utente;

    public function testModificaUtente()
    {
        $utente = new ModificaUtente();
        //verifica se l'utente esistente viene modificato correttamente
        $result = $utente->modificaUtente(12,"Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12New", true);
        $this->assertTrue($result);

        //verifica sull'utente NON esistente
        $result = $utente->modificaUtente(200,"Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12", true);
        $this->assertFalse($result);

        //verifica sull'id "null"
        $result = $utente->modificaUtente(null, "Nicolas", "Paruolo", "1996-04-12", "Bologna", "utente12", "utente12", true);
        $this->assertFalse($result);
    }
}