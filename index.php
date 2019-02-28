<?php

require_once 'TariffInterface.php';
require_once 'tariffs/AbstractRate.php';
require_once 'tariffs/BasicRate.php';
require_once 'tariffs/HourlyRate.php';



$baseRate = new HourlyRate();
try {
    print_r($baseRate->sum(2, 44, 21));
} catch
(InvalidArgumentException $e) {
    echo 'Неподходящий возвраст';
}