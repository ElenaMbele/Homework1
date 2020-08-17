<?php
class ServiceGPS implements iService {
    private $pricePerHour = 15;

//    public function __construct(int $pricePerHour)
//    {
//        $this->pricePerHour = $pricePerHour;
//    }

    public function apply(iTariff $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price = $price + $hours * $this->pricePerHour;
    }
}