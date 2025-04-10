# Tempareture Convertor

## Introduction

This is a tempareture convertor that converts __Degree Celsius__ to __Degree Fahrenheit__

### Installation

```
composer require nnil/my-first-composer-package
```

### Example
```
<?php

require 'vendor/autoload.php';

use Nnil\MyFirstComposerPackage\TemperatureConverter;

$temp = new TemperatureConverter(30, "C");
echo $temp->convert(). "<br>";

$temparature_convertor = new TemperatureConverter(0, "C");
echo $temparature_convertor->convert(). "<br>";

$temparature_convertor2 = new TemperatureConverter(0, "F");
echo $temparature_convertor2->convert(). "<br>";
```