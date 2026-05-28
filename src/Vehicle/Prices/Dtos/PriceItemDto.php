<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Vehicle\Prices\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class PriceItemDto
{

    public function __construct(
        private readonly string $service,
        private readonly int $price,
    ) {}

    public function getService(): string
    {
        return $this->service;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
