<?php

/**
 * Class StudentAbstractRate
 * Тариф Студенчиский
 */
class StudentRate extends AbstractRate implements TariffInterface
{
    protected function tariffPriceKilometer()
    {
        return 4;
    }

    protected function tariffPriceMinute()
    {
        return 1;
    }
    }