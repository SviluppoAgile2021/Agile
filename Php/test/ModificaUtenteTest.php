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
        $result = $utente->modificaUtente(14, true);
        $this->assertTrue($result);

        //verifica sull'utente NON esistente
        $result = $utente->modificaUtente(200, true);
        $this->assertFalse($result);

        //verifica sull'id "null"
        $result = $utente->modificaUtente(null, true);
        $this->assertFalse($result);
    }
}