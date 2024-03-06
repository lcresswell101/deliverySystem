<?php

namespace Src;

class USACourierFactory
{
    public function build(CourierType $courierType): Courier
    {
        return match ($courierType) {
            CourierType::DPD => new Dpd(CourierLocation::USA),
            CourierType::EVRI => new Evri(CourierLocation::USA),
        };
    }
}