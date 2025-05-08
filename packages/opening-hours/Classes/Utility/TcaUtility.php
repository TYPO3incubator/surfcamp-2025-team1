<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Utility;

use TYPO3\CMS\Backend\Utility\BackendUtility;

class TcaUtility
{
    public function companyVacationTitle(&$parameters): void
    {
        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);

        if (empty($record)) {
            return;
        }

        $startDate = date('d.m.Y', $record['start_date']);
        $endDate = date('d.m.Y', $record['end_date']);

        $newTitle =  $startDate . ' - ' . $endDate;
        $parameters['title'] = $newTitle;
    }

    public function timeRangeTitle(&$parameters): void
    {
        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);

        if (empty($record)) {
            return;
        }

        $startTime = date('H:i', $record['start_time']);
        $endTime = date('H:i', $record['end_time']);

        $newTitle =  $startTime . ' - ' . $endTime;
        $parameters['title'] = $newTitle;
    }
}
