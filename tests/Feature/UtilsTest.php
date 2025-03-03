<?php

use PHPUnit\Framework\TestCase;
use App\Services\Utils;

class UtilsTest extends TestCase
{
    public function testDireBonjour()
    {
        $result = Utils::direBonjour();
        $this->assertEquals("Bonjour, Monde !", $result);
    }

    public function testAddition()
    {
        $this->assertEquals(10, Utils::addition(3, 7));
        $this->assertEquals(5, Utils::addition(10, -5));
        $this->assertEquals(0, Utils::addition(0, 0));
    }

    public function testTrouverMax()
    {
        $this->assertEquals(10, Utils::trouverMax(10, 5));
        $this->assertEquals(7, Utils::trouverMax(7, 7));
    }

    public function testCompterCaracteres()
    {
        $this->assertEquals(7, Utils::compterCaracteres("Bonjour"));
        $this->assertEquals(0, Utils::compterCaracteres(""));
        $this->assertEquals(11, Utils::compterCaracteres("Hello World"));
    }

    public function testEstPair()
    {
        $this->assertTrue(Utils::estPair(4));
        $this->assertFalse(Utils::estPair(3));
        $this->assertTrue(Utils::estPair(0));
    }

    public function testSaluer()
    {
        $this->assertEquals("Bonjour, Alice !", Utils::saluer("Alice"));
        $this->assertEquals("Bonjour, Inconnu !", Utils::saluer(""));
    }

    public function testCalculerAire()
    {
        $this->assertEquals(50, Utils::calculerAire(5, 10));
        $this->assertEquals(0, Utils::calculerAire(0, 10));
        $this->assertEquals(0, Utils::calculerAire(-5, 10));
    }

    public function testConvertirEnMajuscules()
    {
        $this->assertEquals("BONJOUR", Utils::convertirEnMajuscules("bonjour"));
        $this->assertEquals("BONJOUR", Utils::convertirEnMajuscules("Bonjour"));
        $this->assertEquals("", Utils::convertirEnMajuscules(""));
    }

    public function testSommeTableau()
    {
        $this->assertEquals(6, Utils::sommeTableau([1, 2, 3]));
        $this->assertEquals(2, Utils::sommeTableau([1, -2, 3]));
        $this->assertEquals(0, Utils::sommeTableau([]));
    }

    public function testExisteDansTableau()
    {
        $this->assertTrue(Utils::existeDansTableau(5, [1, 2, 5]));
        $this->assertFalse(Utils::existeDansTableau(10, [1, 2, 5]));
        $this->assertFalse(Utils::existeDansTableau(10, []));
    }
}
