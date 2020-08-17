<?php

interface iService
{
    public function getPrice(iTariff $tariff, $price);
}