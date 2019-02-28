<?php

/**
 * Interface interfaceTariff
 * Интерфейс подсчета суммы
 */
interface TariffInterface
{
    public function sum($distance, $time, $age);

}
