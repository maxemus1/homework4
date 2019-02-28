<?php

require_once 'trait/GpsTrait.php';
require_once 'trait/DriverTrait.php';
require_once 'trait/TimeTrait.php';
require_once 'TariffInterface.php';
require_once 'tariffs/AbstractRate.php';
require_once 'tariffs/BasicRate.php';
require_once 'tariffs/HourlyRate.php';
require_once 'tariffs/DailyRate.php';
require_once 'tariffs/StudentRate.php';

$baseRate = new HourlyRate();
try {
    print_r($baseRate->sum(2, 59, 22));
} catch
(InvalidArgumentException $e) {
    echo 'Неподходящий возвраст';
}