<?php

use Src\Delivery;
use Src\DispatchPeriod;
use Src\Dpd;
use Src\Evri;

require __DIR__.'/vendor/autoload.php';

$dispatchPeriod = new DispatchPeriod();
$dispatchPeriod->start();

$dispatchPeriod->addDelivery(new Delivery(new Dpd()));
$dispatchPeriod->addDelivery(new Delivery(new Evri()));

$dispatchPeriod->end();