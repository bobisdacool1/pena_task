<?php

namespace Bobisdacool1\PenaTask\Delivery;

use Bobisdacool1\PenaTask\Delivery\Services\RussianPost;

class Delivery
{
	private Weight $parcelWeight;
	private IDeliveryService $deliveryService;

	public function __construct()
	{
		$this->deliveryService = new RussianPost();
		$this->parcelWeight = new Weight();
	}

    public function getConst(): int
    {
        return $this->deliveryService->getDeliveryCost($this->getWeight());
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