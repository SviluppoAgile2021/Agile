<?php
use PHPUnit\Framework\TestCase;
include("Php/CreaEvento.php");
class CreaEventoTest extends TestCase
{

    private CreaEvento $OggettoEvento;

    public function testCreazEventoUnit()
    {
        $OggettoEvento = new CreaEvento();
        //verifica se l'evento viene creato correttamente
        $result = $OggettoEvento->creazioneEvento("asdrubale", "1", "1", "0", "1", "1", "250.00", "0", "2021-08-08 20:30",true);
        $this->assertTrue($result);
    }

}
