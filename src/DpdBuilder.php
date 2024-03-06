<?php

namespace Src;

class DpdBuilder implements CourierBuilderInterface
{
    private Courier $courier;

    public function generateDeliveryNumber(): void
    {
        $this->courier->setDeliveryNumber('DPD');
    }

    public function createCourier(): void
    {
        $this->courier = new Dpd();
    }

    public function getCourier(): Courier
    {
        return $this->courier;
    }
}