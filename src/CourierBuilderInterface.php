<?php

namespace Src;

interface CourierBuilderInterface
{
    public function generateDeliveryNumber(): void;

    public function createCourier(): void;

    public function getCourier(): Courier;
}