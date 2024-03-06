<?php

use Src\CourierType;
use Src\Delivery;
use Src\DispatchPeriod;
use Src\Dpd;
use Src\Evri;
use Src\UKCourierFactory;
use Src\USACourierFactory;

require __DIR__.'/vendor/autoload.php';

$dispatchPeriod = new DispatchPeriod();
$dispatchPeriod->start();

$UKCourierFactory = new UKCourierFactory();
$USACourierFactory = new USACourierFactory();

$dispatchPeriod->addDelivery(new Delivery($UKCourierFactory->build(CourierType::DPD)));
$dispatchPeriod->addDelivery(new Delivery($UKCourierFactory->build(CourierType::EVRI)));
$dispatchPeriod->addDelivery(new Delivery($USACourierFactory->build(CourierType::DPD)));
$dispatchPeriod->addDelivery(new Delivery($USACourierFactory->build(CourierType::EVRI)));

$dispatchPeriod->end();