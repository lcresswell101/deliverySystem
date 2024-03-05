<?php

namespace Src;

class DispatchPeriod
{
    public array $orders;

    public function start(): void
    {
        $this->orders = [];
    }

    public function addDelivery(Delivery $delivery): void
    {
        $this->orders[] = $delivery;
    }

    public function end(): void
    {
        foreach ($this->orders as $order) {
            echo $order->deliveryNumber . "<br>";
        }
    }
}