<?php

/**
 * Class Rate
 */
abstract class Rate
{

    abstract protected function tariffPriceKilometer();

    abstract protected function tariffPriceMinute();

}

