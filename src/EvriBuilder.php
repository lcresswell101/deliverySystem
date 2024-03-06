<?php

namespace Src;

class EvriBuilder implements CourierBuilderInterface
{
    private Courier $courier;

    public function generateDeliveryNumber(): void
    {
        $this->courier->setDeliveryNumber('EVRI');
    }

    public function createCourier(): void
    {
        $this->courier = new Evri();
    }

    public function getCourier(): Courier
    {
        return $this->courier;
    }
}