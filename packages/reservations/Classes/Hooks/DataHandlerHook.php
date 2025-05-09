<?php

namespace TYPO3Incubator\Reservations\Hooks;

use Symfony\Component\Mime\Address;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DataHandlerHook
{
    /**
     * Process the datamap after database operations.
     * Send confirmation mail to customer if reservation is confirmed (hidden = 0).
     *
     * @param $status
     * @param $table
     * @param $id
     * @param $fieldArray
     * @param DataHandler $dataHandler
     * @return void
     */
    public function processDatamap_afterDatabaseOperations($status, $table, $id, $fieldArray, DataHandler $dataHandler): void
    {
        if ($status === 'update' &&
            $table === 'tx_reservations_domain_model_reservation' &&
            $fieldArray['hidden'] == 0
        ) {
            $record = BackendUtility::getRecord($table, $id);

            if (!empty($record['email'])) {
                $this->sendNotification($record);
            }
        }
    }

    /**
     * Send confirmation mail to customer.
     *
     * @param array $record
     * @return void
     */
    private function sendNotification(array $record): void
    {
        $mail = GeneralUtility::makeInstance(MailMessage::class);
        $mail
            ->from(new Address('restaurant@fcbigfood.com', 'FC Bigfood Restaurant'))
            ->to(
                new Address($record['email'], $record['first_name'].' '.$record['last_name'])
            )
            ->subject('Your reservation has been confirmed')
            ->text('Hello ' . $record['first_name'] . ', your reservation has been confirmed. Greetings from FC Bigfood Restaurant.')
            ->send()
        ;
    }
}
