<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Model;

class Drink extends AbstractMenuItem
{
    /**
     * @var float
     */
    protected float $size = 0.0;

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @param float $size
     * @return void
     */
    public function setSize(float $size): void
    {
        $this->size = $size;
    }
}
