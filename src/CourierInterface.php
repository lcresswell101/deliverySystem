<?php

namespace Src;

interface CourierInterface
{
    public function generateDeliveryNumber(): string;
}