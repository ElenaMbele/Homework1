<?php
class ServiceDriver implements iService {
    private $servicePrice = 100;
    public function apply(iTariff $tariff, &$price)
    {
        $price = $price + $this->servicePrice;
    }
}