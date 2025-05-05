<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class OpeningHours extends AbstractEntity
{
    protected bool $monday = false;

    protected bool $tuesday = false;

    protected bool $wednesday = false;

    protected bool $thursday = false;

    protected bool $friday = false;

    protected bool $saturday = false;

    protected bool $sunday = false;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesMonday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesTuesday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesWednesday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesThursday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesFriday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesSaturday = null;

    /**
     * @var ?ObjectStorage<TimeRange>
     */
    protected ?ObjectStorage $timeRangesSunday = null;

    public function isMonday(): bool
    {
        return $this->monday;
    }

    public function setMonday(bool $monday): void
    {
        $this->monday = $monday;
    }

    public function isTuesday(): bool
    {
        return $this->tuesday;
    }

    public function setTuesday(bool $tuesday): void
    {
        $this->tuesday = $tuesday;
    }

    public function isWednesday(): bool
    {
        return $this->wednesday;
    }

    public function setWednesday(bool $wednesday): void
    {
        $this->wednesday = $wednesday;
    }

    public function isThursday(): bool
    {
        return $this->thursday;
    }

    public function setThursday(bool $thursday): void
    {
        $this->thursday = $thursday;
    }

    public function isFriday(): bool
    {
        return $this->friday;
    }

    public function setFriday(bool $friday): void
    {
        $this->friday = $friday;
    }

    public function isSaturday(): bool
    {
        return $this->saturday;
    }

    public function setSaturday(bool $saturday): void
    {
        $this->saturday = $saturday;
    }

    public function isSunday(): bool
    {
        return $this->sunday;
    }

    public function setSunday(bool $sunday): void
    {
        $this->sunday = $sunday;
    }

    public function getTimeRangesMonday(): ?ObjectStorage
    {
        return $this->timeRangesMonday;
    }

    public function setTimeRangesMonday(?ObjectStorage $timeRangesMonday): void
    {
        $this->timeRangesMonday = $timeRangesMonday;
    }

    public function getTimeRangesTuesday(): ?ObjectStorage
    {
        return $this->timeRangesTuesday;
    }

    public function setTimeRangesTuesday(?ObjectStorage $timeRangesTuesday): void
    {
        $this->timeRangesTuesday = $timeRangesTuesday;
    }

    public function getTimeRangesWednesday(): ?ObjectStorage
    {
        return $this->timeRangesWednesday;
    }

    public function setTimeRangesWednesday(?ObjectStorage $timeRangesWednesday): void
    {
        $this->timeRangesWednesday = $timeRangesWednesday;
    }

    public function getTimeRangesThursday(): ?ObjectStorage
    {
        return $this->timeRangesThursday;
    }

    public function setTimeRangesThursday(?ObjectStorage $timeRangesThursday): void
    {
        $this->timeRangesThursday = $timeRangesThursday;
    }

    public function getTimeRangesFriday(): ?ObjectStorage
    {
        return $this->timeRangesFriday;
    }

    public function setTimeRangesFriday(?ObjectStorage $timeRangesFriday): void
    {
        $this->timeRangesFriday = $timeRangesFriday;
    }

    public function getTimeRangesSaturday(): ?ObjectStorage
    {
        return $this->timeRangesSaturday;
    }

    public function setTimeRangesSaturday(?ObjectStorage $timeRangesSaturday): void
    {
        $this->timeRangesSaturday = $timeRangesSaturday;
    }

    public function getTimeRangesSunday(): ?ObjectStorage
    {
        return $this->timeRangesSunday;
    }

    public function setTimeRangesSunday(?ObjectStorage $timeRangesSunday): void
    {
        $this->timeRangesSunday = $timeRangesSunday;
    }
}
