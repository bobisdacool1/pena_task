<?php


namespace Delivery\Services;


use Delivery\Weight;

class DHL implements IDeliveryService
{
	public function getDeliveryCost(Weight $weight): float
	{
		return (float) $weight->getWeightInKG() * 100;
	}
}