<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Vehicle\Contracts;

interface VehiclePriceInterface
{
    public function getImageUrl(): string;
    public function getBrand(): string;
    public function getModel(): string;
    public function getPrice(): int;
    public function getService(): string;
}
