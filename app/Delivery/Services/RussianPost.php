<?php


namespace Delivery\Services;


use Delivery\Weight;

class RussianPost implements IDeliveryService
{
	public function getDeliveryCost(Weight $weight): float
	{
		if ($weight->getWeightInKG() < 10) {
			$cost = 100;
		} else {
			$cost = 1000;
		}

		return $cost;
	}
}