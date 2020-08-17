<?php
class ServiceGPS implements iService {
    const PRICE_PER_HOUR = 15;
    public function getPrice(iTariff $tariff, $price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        return $hours * self::PRICE_PER_HOUR;
//        $price = $price + $hours * self::PRICE_PER_HOUR;
    }
}