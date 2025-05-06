<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Model;

class Dish extends AbstractMenuItem
{
    protected string $description = '';

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
