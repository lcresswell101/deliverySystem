<?php

namespace src;

interface CourierInterface
{
    public function generateDeliveryNumber(): string;

    public function transportMethod(): string;
}