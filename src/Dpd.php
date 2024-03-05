<?php

namespace Src;

class Dpd implements CourierInterface
{

    public function generateDeliveryNumber(): string
    {
        return 'DPD' . rand(0, 10000);
    }

    public function transportMethod(): string
    {
        // TODO: Implement transportMethod() method.
    }
}