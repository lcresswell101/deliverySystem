<?php

namespace Src;

class CourierBuilder
{
    private string $name;

    private string $deliveryNumber;

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDeliveryNumber(string $deliveryNumber): static
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    public function getDeliveryNumber(): string
    {
        return $this->deliveryNumber;
    }

    public function build(): Courier
    {
        return new Courier($this);
    }
}