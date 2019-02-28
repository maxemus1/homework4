<?php
require 'TariffInterface.php';
require 'tariffs/AbstractRate.php';
require 'tariffs/BaseRate.php';


$baseRate = new BaseAbstractRate();
try {
    print_r($baseRate->sum(2, 44, 21));
} catch
(InvalidArgumentException $e) {
    echo 'Неподходящий возвраст';
}