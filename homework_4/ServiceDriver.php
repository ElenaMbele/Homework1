<?php
class ServiceDriver implements iService {
    const SERVICE_PRICE = 100;
    public function getPrice(iTariff $tariff, $price)
    {
        return self::SERVICE_PRICE;
    }
}

