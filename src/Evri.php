<?php

namespace Src;

class Evri extends Courier
{
    public function __construct()
    {
        parent::__construct(CourierType::EVRI);
    }
}