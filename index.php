<?php

require_once 'trait/TimeTrait.php';
require_once 'trait/GpsTrait.php';
require_once 'trait/DriverTrait.php';
require_once 'TariffInterface.php';
require_once 'tariffs/AbstractRate.php';
require_once 'tariffs/BasicRate.php';
require_once 'tariffs/HourlyRate.php';
require_once 'tariffs/DailyRate.php';
require_once 'tariffs/StudentRate.php';
require_once 'NewException.php';

$baseRate = new HourlyRate();
print_r($baseRate->sum(2, 99, 25,1,1));

