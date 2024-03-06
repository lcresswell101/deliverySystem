<?php

namespace Src;

class Dpd extends Courier
{
    public function __construct(public CourierLocation $courierLocation)
    {
        parent::__construct(CourierType::DPD, $this->courierLocation);
    }
}