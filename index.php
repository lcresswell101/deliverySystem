<?php

use Src\CourierFactory;
use Src\CourierType;
use Src\Delivery;
use Src\DispatchPeriod;
use Src\Dpd;
use Src\Evri;

require __DIR__.'/vendor/autoload.php';

$dispatchPeriod = new DispatchPeriod();
$dispatchPeriod->start();

$courierFactory = new CourierFactory();

$dispatchPeriod->addDelivery(new Delivery($courierFactory->build(CourierType::DPD)));
$dispatchPeriod->addDelivery(new Delivery($courierFactory->build(CourierType::EVRI)));

$dispatchPeriod->end();