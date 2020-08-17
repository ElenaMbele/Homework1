<?php

interface iService
{
    public function apply(iTariff $tariff, &$price);
}