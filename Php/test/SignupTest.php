<?php
	require("Php/Signup.php");
	
	use PHPUnit\Framework\TestCase;
	
	class SignupTest extends TestCase
	{
		private Signup $OggettoUtente;
		
		public function testSignup()
		{
			$result = $this->OggettoUtente->signup("nomone", "cognomone", "userone", "passwordone", "1969-07-14", "Testone", TRUE);
			$this->assertTrue($result);
		}
	}
