<?php
class TariffPerHour extends TariffAbstract
{
    protected $pricePerMinute = 200 / 60;
    protected $pricePerKilometer = 0;
    const MINUTES_IN_HOUR = 60;

    /**
     * TariffPerHour constructor.
     * @param int $distance
     * @param int $minutes
     */
    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        if($this->minutes < self::MINUTES_IN_HOUR) {
            $this->minutes = self::MINUTES_IN_HOUR;
        } else {
            $this->minutes = $this->minutes - $this->minutes % self::MINUTES_IN_HOUR + self::MINUTES_IN_HOUR;
        }
    }
}