<?php

namespace Src;

class Delivery
{
    public string $deliveryNumber;

    public function __construct(public CourierInterface $courier)
    {
        $this->deliveryNumber = $this->courier->generateDeliveryNumber();
    }
}