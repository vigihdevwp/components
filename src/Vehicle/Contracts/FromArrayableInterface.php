<?php

declare(strict_types=1);

namespace VigihdevWP\Components\Vehicle\Contracts;

interface FromArrayableInterface
{
    public function fromArray(array $data): self;
}
