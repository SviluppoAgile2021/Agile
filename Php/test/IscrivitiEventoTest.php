<?php
use PHPUnit\Framework\TestCase;
include("Php/IscrivitiEvento.php");
class IscrivitiEventoTest extends TestCase
{
    private IscrivitiEvento $Obj;

    public function testIscrizioneEventi()
    {
        $Obj = new IscrivitiEvento();
        //verifica se l'iscrizione ad un evento va a buon fine con evento e utente esistente
        $result = $Obj->iscriviti("2","8",true);
        $this->assertTrue($result);

        //verifica se l'asserzione è falsa se l'utente e l'evento non esiste
        $result = $Obj->iscriviti("888","888",true);
        $this->assertFalse($result);
    }

}
