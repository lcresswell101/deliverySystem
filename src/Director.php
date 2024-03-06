<?php

namespace Src;

class Director
{
    public function build(CourierBuilderInterface $courierBuilder): Courier
    {
        $courierBuilder->createCourier();
        $courierBuilder->generateDeliveryNumber();

        return $courierBuilder->getCourier();
    }
}