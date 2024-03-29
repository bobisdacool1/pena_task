<?php

namespace Bobisdacool1\PenaTask\Delivery;

class Weight
{
    private float $weight;

    public function __construct()
	{
		$this->weight = 0;
	}

	public function setWeightInKG(float $weightInKG): void
    {
        $this->weight = $weightInKG / 1000;
    }

    public function setWeightInGrams(float $weightInGrams): void
    {
        $this->weight = $weightInGrams;
    }

    public function getWeightInKG(): int
    {
        return (int) ($this->weight / 1000);
    }

    public function getWeightInG(): float
    {
        return $this->weight;
    }
}