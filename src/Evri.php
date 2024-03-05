<?php

namespace Src;

class Evri implements CourierInterface
{

    public function generateDeliveryNumber(): string
    {
        return 'EVRI' . rand(0, 10000);
    }

    public function transportMethod(): string
    {
        // TODO: Implement transportMethod() method.
    }
}