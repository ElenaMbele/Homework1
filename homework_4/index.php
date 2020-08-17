<?php
include_once "iTariff.php";
include_once "iService.php";
include_once "TariffAbstract.php";
include_once "TariffBasic.php";
include_once "TariffStudent.php";
include_once "TariffPerHour.php";
include_once "ServiceGPS.php";
include_once "ServiceDriver.php";

/** @var iTariff $tariff */
$tariff = new TariffStudent(5, 60);
$tariff->addService(new ServiceDriver());
echo $tariff->calculatePrice();