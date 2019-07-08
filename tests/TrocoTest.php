<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Troco;

class TrocoTest extends TestCase
{
    public function testQtdeNotasRetornaOArray()
    {
        $troco = new Troco();
        $expected = [
            "100" => 1,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($expected, $troco->getQtdeNotas(100));
    }

    public function testTodasNotasPreenchidas(){
        $troco = new Troco();
        $valorACalcular = 188.86;
        $esperado = array(
            "100" => 1,
            "50" => 1,
            "20" => 1,
            "10" => 1,
            "5" => 1,
            "2" => 1,
            "1" => 1,
            "0.5" => 1,
            "0.25" => 1,
            "0.1" => 1,
            "0.01" => 1
        );

        $this->assertEquals($esperado, $troco->getQtdeNotas($valorACalcular));
    }

    public function testValoresNegativos(){
        $troco = new Troco();
        $valorACalcular = -100;
        $esperado = array(
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.01" => 0
        );

        $this->assertEquals($esperado, $troco->getQtdeNotas($valorACalcular));
    }

    public function testValorZerado(){
        $troco = new Troco();
        $valorACalcular = 0;
        $esperado = array(
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.01" => 0
        );

        $this->assertEquals($esperado, $troco->getQtdeNotas($valorACalcular));
    }
}