<?php

/**
 * Class Rate
 */
abstract class Rate
{
    protected $priceKil;
    protected $priceMin;

    abstract public function tariffPriceKil();

    abstract public function tariffPriceMin();


    function __construct()
    {

    }
}

