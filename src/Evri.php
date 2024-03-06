<?php

namespace Src;

class Evri extends Courier
{
    public function __construct(public CourierLocation $courierLocation)
    {
        parent::__construct(CourierType::EVRI, $this->courierLocation);
    }
}