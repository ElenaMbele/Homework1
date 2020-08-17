<?php
interface iTariff
{
  public function calculatePrice (): int;
  public function addService (iService $service): self;
  public function getMinutes(): int;
  public function getDistance(): int;
}