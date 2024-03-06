<?php

use Src\CourierBuilder;
use Src\Delivery;
use Src\Director;
use Src\DispatchPeriod;
use Src\DpdBuilder;
use Src\EvriBuilder;

require __DIR__.'/vendor/autoload.php';

$dispatchPeriod = new DispatchPeriod();
$dispatchPeriod->start();

$dpdBuilder = new DpdBuilder();
$dpd = (new Director())->build($dpdBuilder);

$evriBuilder = new EvriBuilder();
$evri = (new Director())->build($evriBuilder);

$dispatchPeriod->addDelivery(new Delivery($dpd));
$dispatchPeriod->addDelivery(new Delivery($evri));

$dispatchPeriod->end();