<?php


namespace Delivery\Services;


use Delivery\Weight;

class DHL implements IDeliveryService
{
	public function getPrice(Weight $weight): float
	{
		return $weight->getWeightInKG() * 10;
	}
}