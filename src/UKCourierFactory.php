<?php

namespace Src;

class UKCourierFactory
{
    public function build(CourierType $courierType): Courier
    {
        return match ($courierType) {
            CourierType::DPD => new Dpd(CourierLocation::UK),
            CourierType::EVRI => new Evri(CourierLocation::UK),
        };
    }
}