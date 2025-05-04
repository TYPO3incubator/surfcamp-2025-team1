<?php

namespace TYPO3Incubator\SurfcampBase\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class WeatherDataRepository extends Repository {
    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
