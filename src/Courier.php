<?php

namespace Src;

abstract class Courier
{
    private string $deliveryNumber;

    final public function setDeliveryNumber(string $prefix): void
    {
        $this->deliveryNumber = $prefix . rand(1000, 9999);
    }

    final public function getDeliveryNumber(): string
    {
        return $this->deliveryNumber;
    }
}