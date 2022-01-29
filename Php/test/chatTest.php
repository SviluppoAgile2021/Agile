<?php
require("Php/Chat.php");

use PHPUnit\Framework\TestCase;

class ChatTest extends TestCase
{
    public function testChat()
    {
        $chat = new Chat();

        //Standard Chat
        $this->assertTrue($chat->addChat("Testing Chat", 7,true));
        //Chat con Escape
        $this->assertTrue($chat->addChat("Testing Chat but with è *",7,true));
        //Utente non valido
        $this->assertFalse($chat->addChat("Testing Chat but no",602,true));
    }
}
