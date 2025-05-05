<?php

declare(strict_types=1);

namespace OpeningHours\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class TimeRange extends AbstractEntity
{
    protected \DateTime $startTime;

    protected \DateTime $endTime;

    protected int $contentElement = 0;

    protected string $weekday = '';

    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): \DateTime
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function getContentElement(): int
    {
        return $this->contentElement;
    }

    public function setContentElement(int $contentElement): void
    {
        $this->contentElement = $contentElement;
    }

    public function getWeekday(): string
    {
        return $this->weekday;
    }

    public function setWeekday(string $weekday): void
    {
        $this->weekday = $weekday;
    }
}
