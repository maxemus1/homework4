<?php
require 'InterfaceTariff.php';
require 'tariffs/Rate.php';
require 'tariffs/BaseRate.php';


$baseRate = new BaseRate();
try {
    print_r($baseRate->sum(2, 44, 21));
} catch
(InvalidArgumentException $e) {
    echo 'Неподходящий возвраст';
}