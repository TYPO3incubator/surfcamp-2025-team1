<?php

declare(strict_types=1);

namespace TYPO3Incubator\Reservations\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;

final class ReservationController extends AbstractController {

    /**
     * Form action to display a reservation form.
     *
     * @return ResponseInterface
     */
    public function formAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }
}
