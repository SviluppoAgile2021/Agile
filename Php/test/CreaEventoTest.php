<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint;
include("Php/CreaEvento.php");
class CreaEventoTest extends TestCase
{
    private CreaEvento $OggettoEvento;

    public function testCreazEventoUnit()
    {
        $OggettoEvento = new CreaEvento();
        //verifica se l'evento viene creato correttamente con capienza 0
        $result = $OggettoEvento->creazioneEvento("test capienza 0", "1", "1", "0", "1", "1", "250.00", "0", "2021-08-08 20:30",true);
		
		$this->assertThat(
			$result[0],
			$this->isTrue($result[0])
		);
		$this->assertThat(
			$result[1],
			$this->isTrue($result[1])
		);
		
		//verifica con capienza>capienza_max
		$result = $OggettoEvento->creazioneEvento("test overbooking", "1", "1", "99999", "1", "1", "150.00", "0", "2022-08-08 20:30", TRUE);
	    $this->assertThat(
		    $result[0],
		    $this->isFalse($result[0])
	    );
	    $this->assertThat(
		    $result[1],
		    $this->isFalse($result[1])
	    );
		
		//verifica con evento normale
		$result = $OggettoEvento->creazioneEvento("test normale", "1", "1", "250", "1", "1", "150.00", "0", "2022-08-08 20:30", TRUE);
	    $this->assertThat(
		    $result[0],
		    $this->isFalse($result[0])
	    );
	    $this->assertThat(
		    $result[1],
		    $this->isTrue($result[1])
	    );
		
		
    }

}
