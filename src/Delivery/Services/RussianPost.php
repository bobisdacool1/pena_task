<?php

namespace Bobisdacool1\PenaTask\Delivery\Services;

use Bobisdacool1\PenaTask\Delivery\IDeliveryService;
use Bobisdacool1\PenaTask\Delivery\Weight;

class RussianPost implements IDeliveryService
{
    public function getDeliveryCost(Weight $weight): float
    {
        return $weight->getWeightInKG() < 10 ? 100 : 1000;
    }
}