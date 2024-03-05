<?php

use Src\CourierBuilder;
use Src\Delivery;
use Src\DispatchPeriod;

require __DIR__.'/vendor/autoload.php';

$dispatchPeriod = new DispatchPeriod();
$dispatchPeriod->start();

$courierBuilder = new CourierBuilder();

$dpd = $courierBuilder
    ->setName('dpd')
    ->setDeliveryNumber('DPD'. rand(1, 10000))
    ->build();

$evri = $courierBuilder
    ->setName('evri')
    ->setDeliveryNumber('EVRI'. rand(1, 10000))
    ->build();

$dispatchPeriod->addDelivery(new Delivery($dpd));
$dispatchPeriod->addDelivery(new Delivery($evri));

$dispatchPeriod->end();