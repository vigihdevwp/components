<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Order\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehicleOrderDto
{
    public function __construct(
        public readonly string $brand,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly string $model,
        public readonly int $price,
        public readonly string $service,
    ) {}
}
