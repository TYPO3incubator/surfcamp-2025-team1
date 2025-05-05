<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class CompanyVacation extends AbstractEntity
{
    protected \DateTime $startDate;

    protected \DateTime $endDate;

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }
}
