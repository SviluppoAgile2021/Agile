<?php
use PHPUnit\Framework\TestCase;
include("Php/EliminaUtente.php");
class EliminaUtenteTest extends TestCase
{
    private EliminaUtente $utente;

    public function testEliminaUtente()
    {
        $utente = new EliminaUtente();
        //verifica se l'utente esistente viene rimosso correttamente
        $result = $utente->eliminaUtente(24, true);
        $this->assertTrue($result);

        //verifica sull'utente NON esistente
        $result = $utente->eliminaUtente(200, true);
        $this->assertFalse($result);

        //verifica sull'id "null"
        $result = $utente->eliminaUtente(null, true);
        $this->assertFalse($result);
    }
}