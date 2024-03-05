<?php

namespace Src;

class Courier
{
    private string $name;

    private string $deliveryNumber;

    public function __construct(private CourierBuilder $courierBuilder)
    {
        $this->name = $this->courierBuilder->getName();
        $this->deliveryNumber = $this->courierBuilder->getDeliveryNumber();
    }

    public function getDeliveryNumber(): string
    {
        return $this->deliveryNumber;
    }
}