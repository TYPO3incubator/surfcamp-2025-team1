<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class AbstractMenuItem extends AbstractEntity
{
    protected string $title;
    protected float $price;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
