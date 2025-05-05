<?php

namespace TYPO3Incubator\Reservations\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class ReservationRepository extends Repository
{
    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
