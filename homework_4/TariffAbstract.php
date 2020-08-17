<?php

abstract class TariffAbstract implements iTariff {
    protected $pricePerMinute;
    protected $pricePerKilometer;
    protected $distance;
    protected $minutes;
    /** @var iService[] */
    protected $services = [];


    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function calculatePrice(): int
    {
        $price = $this->distance * $this->pricePerKilometer + $this->minutes * $this->pricePerMinute;
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
        return $price;
    }

    public function addService(iService $service): iTariff
    {
        array_push($this->services, $service);
        return $this;
    }

    public function getMinutes(): int
    {
        return $this->minutes;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}