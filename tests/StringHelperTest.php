<?php

class StringHelperTest extends PHPUnit\Framework\TestCase
{
    public function testString1()
    {
        $result         = \App\StringHelper::revertCharacters('Привет! Давно не виделись.');
        $expectedResult = 'Тевирп! Онвад ен ьсиледив.';
        $this->assertEquals($result, $expectedResult);
    }

    public function testString2()
    {
        $result         = \App\StringHelper::revertCharacters(
            'When I wrote this code, only God and I understood what I did. Now only God knows'
        );
        $expectedResult = 'Nehw I etorw siht edoc, ylno Dog dna I dootsrednu tahw I did. Won ylno Dog swonk';
        $this->assertEquals($result, $expectedResult);
    }

    public function testString3()
    {
        $result         = \App\StringHelper::revertCharacters(
            'У каждого языка  есть время жизни. За исключением \'Кобола\', конечно'
        );
        $expectedResult = 'У огоджак акызя ьтсе ямерв инзиж. Аз меинечюлкси \'Алобок\', онченок';
        $this->assertEquals($result, $expectedResult);
    }

    public function testString4()
    {
        $result         = \App\StringHelper::revertCharacters(
            'Когда какой-то засранец скажет тебе: «У меня есть право на моё мнение», ты скажи: «А, да? А у меня есть право на моё мнение, а моё мнение в том, что у тебя нет прав на твоё мнение».'
        );
        $expectedResult = 'Адгок йокак-от ценарсаз тежакс ебет: «У янем ьтсе оварп ан ёом еиненм», ыт ижакс: «А, ад?  А у янем ьтсе оварп ан ёом еиненм, а ёом еиненм в мот, отч у ябет тен варп ан ёовт еиненм».';
        $this->assertEquals($result, $expectedResult);
    }
}