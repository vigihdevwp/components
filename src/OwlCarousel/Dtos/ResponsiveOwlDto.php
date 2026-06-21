<?php

declare(strict_types=1);

namespace VigihdevWP\Components\OwlCarousel\Dtos;

final class ResponsiveOwlDto
{
    private array $breakpoints = [];

    private function __construct() {}

    public static function create(): static
    {
        return new static();
    }

    public function addBreakpoint(int $width,  OptionsOwlDto $options): static
    {
        $this->breakpoints[$width] = $options->toArray();
        ksort($this->breakpoints);
        return $this;
    }

    public function xs(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(0, $options);
    }

    public function sm(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(576, $options);
    }

    public function md(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(768, $options);
    }

    public function lg(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(992, $options);
    }

    public function xl(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(1200, $options);
    }

    public function xxl(OptionsOwlDto $options): static
    {
        return $this->addBreakpoint(1400, $options);
    }

    public function toArray(): array
    {
        return $this->breakpoints;
    }

    public function toJson(int $options = 0): string
    {
        return json_encode($this->toArray(), JSON_FORCE_OBJECT | $options);
    }

    /**
     * Get all breakpoints
     */
    public function getBreakpoints(): array
    {
        return $this->breakpoints;
    }

    /**
     * Check if breakpoint exists
     */
    public function hasBreakpoint(int $width): bool
    {
        return isset($this->breakpoints[$width]);
    }

    /**
     * Get specific breakpoint
     */
    public function getBreakpoint(int $width): ?array
    {
        return $this->breakpoints[$width] ?? null;
    }

    /**
     * Remove breakpoint
     */
    public function removeBreakpoint(int $width): static
    {
        unset($this->breakpoints[$width]);
        return $this;
    }

    /**
     * Clear all breakpoints
     */
    public function clear(): static
    {
        $this->breakpoints = [];
        return $this;
    }

    /**
     * Get breakpoints count
     */
    public function count(): int
    {
        return count($this->breakpoints);
    }
}
