<?php

/**
 * Class BaseAbstractRate
 * Базовый тариф
 */
class BasicRate extends AbstractRate implements TariffInterface
{
    protected function tariffPriceKilometer()
    {
        return 10;
    }

    protected function tariffPriceMinute()
    {
        return 3;
    }
}
