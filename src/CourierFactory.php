<?php

namespace Src;

class CourierFactory
{
    public function build(CourierType $courierType): Courier
    {
        return match ($courierType) {
            CourierType::DPD => new Dpd(),
            CourierType::EVRI => new Evri(),
        };
    }
}