<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once "iTariff.php";
include_once "iService.php";
include_once "TariffAbstract.php";
include_once "TariffBasic.php";
include_once "TariffStudent.php";
include_once "TariffPerHour.php";
include_once "ServiceGPS.php";
include_once "ServiceDriver.php";

/** @var iTariff $tariff */
$tariff = new TariffStudent(5, 120);
$tariff->addService(new ServiceDriver());
$tariff->addService(new ServiceGPS());
echo $tariff->calculatePrice();