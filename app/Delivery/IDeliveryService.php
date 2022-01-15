<?php


namespace Delivery\Services;


use Delivery\Weight;

interface IDeliveryService
{
	public function getDeliveryCost(Weight $weight): float;
}