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

$eception = new NewException();
//$baseRate = new BasicRate();
//$hourlyRate = new HourlyRate();//Время указывается в минутах округляется до 60
$dailyRate = new DailyRate();//Время указывается в часах
//$studentRate = new StudentRate();
$eception->exception($dailyRate->sum(0, 24.30, 25));
