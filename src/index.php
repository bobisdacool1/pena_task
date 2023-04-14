<?php
require_once 'vendor/autoload.php';

use Bobisdacool1\PenaTask\Delivery\Delivery;
use Bobisdacool1\PenaTask\Delivery\Services\DHL;
use Bobisdacool1\PenaTask\Delivery\Weight;

$delivery = new Delivery();

$parcelWeight = new Weight();
$parcelWeight->setWeightInGrams(13500);

$delivery->setParcelWeight($parcelWeight);
$delivery->setDeliveryService(new DHL());

$finalCost = $delivery->getConst();

echo "final cost: $finalCost";