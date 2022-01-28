<?php
require("Php/contact.php");
use PHPUnit\Framework\TestCase;

class contactTest extends TestCase
{
    public function testContact()
    {
        $contact = new Contact();

        //Commento normale
        $this->assertTrue($contact->addComment("commentotest",1,1,true));
        //Commento con caratteri di cui fare escape
        $this->assertTrue($contact->addComment("'prova123",1,1,true));

    }
}
