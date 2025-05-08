<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class TimeRange extends AbstractEntity
{
    /**
     * @var ?\DateTime
     */
    protected ?\DateTime $startTime;

    /**
     * @var ?\DateTime
     */
    protected ?\DateTime $endTime;

    /**
     * @var int
     */
    protected int $contentElement = 0;

    /**
     * @var string
     */
    protected string $weekday = '';

    public function getStartTime(): ?\DateTime
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): ?\DateTime
    {
        return $this->endTime;
    }

    public function setEndTime(?\DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return int
     */
    public function getContentElement(): int
    {
        return $this->contentElement;
    }

    /**
     * @param int $contentElement
     * @return void
     */
    public function setContentElement(int $contentElement): void
    {
        $this->contentElement = $contentElement;
    }

    /**
     * @return string
     */
    public function getWeekday(): string
    {
        return $this->weekday;
    }

    /**
     * @param string $weekday
     * @return void
     */
    public function setWeekday(string $weekday): void
    {
        $this->weekday = $weekday;
    }
}
