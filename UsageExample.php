<?php

use Delivery\Services\DHL;
use Delivery\Weight;

include_once $_SERVER['DOCUMENT_ROOT'].'/app/include.php';

$delivery = new Delivery();

$parcelWeight = new Weight();
$parcelWeight->setWeightInGrams(13500);

$delivery->setParcelWeight($parcelWeight);
$delivery->setDeliveryService(new DHL());

$delivery->getDeliveryService()->getDeliveryCost($delivery->getWeight());