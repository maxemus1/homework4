<?php
require 'InterfaceTariff.php';
require 'tariffs/Rate.php';
require 'tariffs/BaseRate.php';


$baseRate = new BaseRate();
print_r($baseRate->sum(2, 44, 21));
