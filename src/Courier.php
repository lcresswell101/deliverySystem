<?php

namespace Src;

class Courier implements CourierInterface
{
    public function __construct(public CourierType $courierType)
    {

    }

    public function generateDeliveryNumber(): string
    {
        return rand(0, 10000);
    }
}