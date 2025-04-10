<?php

use Nnil\MyFirstComposerPackage\TemperatureConverter;
use PHPUnit\Framework\TestCase;

class TemperatureConverterTest extends TestCase
{

    public function testTemperature() {
        $temparature_convertor = new TemperatureConverter(0, "C");
        $this->assertEquals(32, $temparature_convertor->convert());

        $temparature_convertor = new TemperatureConverter(0, "F");
        $this->assertEquals(-17.78, $temparature_convertor->convert());
    }
}