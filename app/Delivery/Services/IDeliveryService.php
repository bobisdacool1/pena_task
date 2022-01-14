<?php


namespace Delivery\Services;


use Delivery\Weight;

interface IDeliveryService
{
	public function getPrice(Weight $weight): float;
}