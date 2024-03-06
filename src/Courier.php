<?php

namespace Src;

class Courier implements CourierInterface
{
    public function __construct(public CourierType $courierType, public CourierLocation $courierLocation)
    {

    }

    public function generateDeliveryNumber(): string
    {
        return rand(0, 10000);
    }
}