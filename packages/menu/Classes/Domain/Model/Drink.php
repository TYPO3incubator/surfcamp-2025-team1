<?php

namespace Typo3Incubator\Menu\Domain\Model;

class Drink extends AbstractMenuItem
{
    protected float $size = 0.0;

    public function getSize(): float
    {
        return $this->size;
    }

    public function setSize(float $size): void
    {
        $this->size = $size;
    }
}