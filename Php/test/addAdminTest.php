<?php
use PHPUnit\Framework\TestCase;
include("Php/AddAdmin.php");
class addAdminTest extends TestCase
{
    public function testAddAdminUnit()
    {
        $OggettoEvento = new AddAdmin();

        $result = $OggettoEvento->aggiungiAdmin(1, 2, 3,4,true);
        $this->assertTrue($result);

        $result = $OggettoEvento->aggiungiAdmin(1, -1, -1,4,true);
        $this->assertTrue($result);

        $result = $OggettoEvento->aggiungiAdmin(1, -1, 3,4,true);
        $this->assertTrue($result);

        $result = $OggettoEvento->aggiungiAdmin(1, 2, 3,-1,true);
        $this->assertTrue($result);

    }

}
