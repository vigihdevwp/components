<?php

declare(strict_types=1);

namespace VigihdevWP\Components\OwlCarousel\Dtos;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class OptionsOwlDto
{

    public function __construct(
        public readonly int|float $items,
        public readonly bool $loop = true,
        public readonly int $margin = 10,
        public readonly bool $nav = false,
        public readonly bool $dots = true,
        public readonly bool $autoplay = true,
        #[SerializedName("nav_text")]
        public readonly array $navText = [
            '<span class="material-icons-outlined ripple-effect" aria-hidden="true">arrow_back_ios</span>',
            '<span class="material-icons-outlined ripple-effect" aria-hidden="true">arrow_forward_ios</span>'
        ],
    ) {}

    public function toArray(): array
    {
        return [
            'items' => $this->items,
            'loop' => $this->loop,
            'margin' => $this->margin,
            'nav' => $this->nav,
            'dots' => $this->dots,
            'autoplay' => $this->autoplay,
            'navText' => $this->navText
        ];
    }

    public function toJson(int $options = 0): string
    {
        return json_encode($this->toArray(), $options);
    }
}
