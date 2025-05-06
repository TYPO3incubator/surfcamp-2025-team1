<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Model;

class Dish extends AbstractMenuItem
{
    /**
     * @var string
     */
    protected string $description = '';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
