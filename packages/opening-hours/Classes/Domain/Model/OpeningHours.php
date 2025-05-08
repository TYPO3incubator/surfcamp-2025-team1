<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class OpeningHours extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $title = '';

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

    public function __construct()
    {
        $this->timeRangesMonday = new ObjectStorage();
        $this->timeRangesTuesday = new ObjectStorage();
        $this->timeRangesWednesday = new ObjectStorage();
        $this->timeRangesThursday = new ObjectStorage();
        $this->timeRangesFriday = new ObjectStorage();
        $this->timeRangesSaturday = new ObjectStorage();
        $this->timeRangesSunday = new ObjectStorage();
    }

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
     * @return ObjectStorage|null
     */
    public function getTimeRangesMonday(): ?ObjectStorage
    {
        return $this->timeRangesMonday;
    }

    /**
     * @param ObjectStorage|null $timeRangesMonday
     * @return void
     */
    public function setTimeRangesMonday(?ObjectStorage $timeRangesMonday): void
    {
        $this->timeRangesMonday = $timeRangesMonday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesTuesday(): ?ObjectStorage
    {
        return $this->timeRangesTuesday;
    }

    /**
     * @param ObjectStorage|null $timeRangesTuesday
     * @return void
     */
    public function setTimeRangesTuesday(?ObjectStorage $timeRangesTuesday): void
    {
        $this->timeRangesTuesday = $timeRangesTuesday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesWednesday(): ?ObjectStorage
    {
        return $this->timeRangesWednesday;
    }

    /**
     * @param ObjectStorage|null $timeRangesWednesday
     * @return void
     */
    public function setTimeRangesWednesday(?ObjectStorage $timeRangesWednesday): void
    {
        $this->timeRangesWednesday = $timeRangesWednesday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesThursday(): ?ObjectStorage
    {
        return $this->timeRangesThursday;
    }

    /**
     * @param ObjectStorage|null $timeRangesThursday
     * @return void
     */
    public function setTimeRangesThursday(?ObjectStorage $timeRangesThursday): void
    {
        $this->timeRangesThursday = $timeRangesThursday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesFriday(): ?ObjectStorage
    {
        return $this->timeRangesFriday;
    }

    /**
     * @param ObjectStorage|null $timeRangesFriday
     * @return void
     */
    public function setTimeRangesFriday(?ObjectStorage $timeRangesFriday): void
    {
        $this->timeRangesFriday = $timeRangesFriday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesSaturday(): ?ObjectStorage
    {
        return $this->timeRangesSaturday;
    }

    /**
     * @param ObjectStorage|null $timeRangesSaturday
     * @return void
     */
    public function setTimeRangesSaturday(?ObjectStorage $timeRangesSaturday): void
    {
        $this->timeRangesSaturday = $timeRangesSaturday;
    }

    /**
     * @return ObjectStorage|null
     */
    public function getTimeRangesSunday(): ?ObjectStorage
    {
        return $this->timeRangesSunday;
    }

    /**
     * @param ObjectStorage|null $timeRangesSunday
     * @return void
     */
    public function setTimeRangesSunday(?ObjectStorage $timeRangesSunday): void
    {
        $this->timeRangesSunday = $timeRangesSunday;
    }
}
