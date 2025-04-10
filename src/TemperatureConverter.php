<?php

namespace Nnil\MyFirstComposerPackage;

class TemperatureConverter {
    protected float $temparature;
    protected string $unit_of_measure;

    public function __construct(float $temparature, string $unit_of_measure) {
        $this->temparature = $temparature;
        $this->unit_of_measure = $unit_of_measure;
    }

    public function convert() : float {
        if (!isset($this->unit_of_measure) && ($this->unit_of_measure  === "C" || $this->unit_of_measure  === "F")) {
            return 0;
        }

        // If unit of measure if Degrees Celcius convert to Fahrenheit
        // Else convert to Fahrenheit
        return $this->unit_of_measure  === "C" ? round((($this->temparature * 9/5) + 32), 2) : round((($this->temparature - 32) * 5/9), 2);
    }
}