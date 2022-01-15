<?php

use Delivery\Services\IDeliveryService;
use Delivery\Services\RussianPost;
use Delivery\Weight;
use Location\Route;

class Delivery
{
	private Route $deliveryRoute;
	private Weight $parcelWeight;

	private IDeliveryService $deliveryService;

	public function __construct()
	{
		$this->deliveryService = new RussianPost();
		$this->parcelWeight = new Weight();
	}

	public function setDeliveryService(IDeliveryService $deliveryService): void
	{
		$this->deliveryService = $deliveryService;
	}

	public function setParcelWeight(Weight $parcelWeight): void
	{
		$this->parcelWeight = $parcelWeight;
	}

	public function getDeliveryService(): IDeliveryService
	{
		return $this->deliveryService;
	}

	public function getWeight(): Weight
	{
		return $this->parcelWeight;
	}
}