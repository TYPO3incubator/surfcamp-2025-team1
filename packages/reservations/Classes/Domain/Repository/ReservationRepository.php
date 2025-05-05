<?php

namespace TYPO3Incubator\Reservations\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
class ReservationRepository extends Repository
{
    /**
     * Initialize repository and update query settings.
     *
     * @return void
     */
    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * Find all current reservations. (>= today)
     *
     * @return QueryInterface
     */
    public function findCurrentReservations(): QueryInterface {
        $query = $this->createQuery();
        $query->matching(
            $query->greaterThanOrEqual(
                'reservation_time',
                (new \DateTime('today'))->format('Y-m-d H:i:s')
            ),
        );
        $query->setOrderings([
            'reservation_time' => QueryInterface::ORDER_ASCENDING
        ]);
        return $query->execute();
    }
}
