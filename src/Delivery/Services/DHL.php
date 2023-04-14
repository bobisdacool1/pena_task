<?php

namespace Bobisdacool1\PenaTask\Delivery\Services;

use Bobisdacool1\PenaTask\Delivery\IDeliveryService;
use Bobisdacool1\PenaTask\Delivery\Weight;

class DHL implements IDeliveryService
{
    public function getDeliveryCost(Weight $weight): float
    {
        return (float)$weight->getWeightInKG() * 100;
    }
}