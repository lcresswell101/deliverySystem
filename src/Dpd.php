<?php

namespace Src;

class Dpd extends Courier
{
    public function __construct()
    {
        parent::__construct(CourierType::DPD);
    }
}