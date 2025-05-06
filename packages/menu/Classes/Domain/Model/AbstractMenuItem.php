<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class AbstractMenuItem extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $title;
    /**
     * @var float
     */
    protected float $price;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
