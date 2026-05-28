<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Vehicle\Dtos;

use VigihdevWP\Components\Vehicle\Contracts\{VehiclePriceInterface, JsonableInterface};
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehiclePriceDto implements VehiclePriceInterface, JsonableInterface
{
    public function __construct(
        private readonly string $brand,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        private readonly string $model,
        private readonly int $price,
        private readonly string $service,
    ) {}

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function toArray(): array
    {
        return [
            'brand' => $this->brand,
            'image_url' => $this->imageUrl,
            'model' => $this->model,
            'price' => $this->price,
            'service' => $this->service,
        ];
    }

    public function toJson(int $flags = 0): string
    {
        return json_encode($this->toArray(), $flags);
    }
}
