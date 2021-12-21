<?php
use PHPUnit\Framework\TestCase;
include("Php/IscrivitiEvento.php");
class IscrivitiEventoTest extends TestCase
{
    private IscrivitiEvento $Obj;

    public function testIscrizioneEventi()
    {
        $Obj = new IscrivitiEvento();
        //verifica se l'iscrizione ad un evento va a buon fine
        $result = $Obj->iscriviti("1","1",true);
        $this->assertTrue($result);
    }

}
