<?php

namespace Bobisdacool1\PenaTask\Delivery;

interface IDeliveryService
{
	public function getDeliveryCost(Weight $weight): float;
}