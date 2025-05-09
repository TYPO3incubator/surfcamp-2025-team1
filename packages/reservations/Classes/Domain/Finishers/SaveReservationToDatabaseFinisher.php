<?php

declare(strict_types=1);

namespace TYPO3Incubator\Reservations\Domain\Finishers;

use TYPO3\CMS\Form\Domain\Finishers\Exception\FinisherException;
use TYPO3\CMS\Form\Domain\Finishers\SaveToDatabaseFinisher;

class SaveReservationToDatabaseFinisher extends SaveToDatabaseFinisher
{
    /**
     * Set option pid = storagePid (from site settings)
     *
     * @return void
     * @throws FinisherException
     */
    protected function executeInternal(): void
    {
        $request = $this->finisherContext->getRequest();
        $storagePid = $request->getAttribute('site')->getSettings()->get('reservations.storagePid', 0);
        $this->options['databaseColumnMappings']['pid']['value'] = $storagePid;
        parent::executeInternal();
    }
}
