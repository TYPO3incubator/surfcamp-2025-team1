<?php

declare(strict_types=1);

namespace TYPO3Incubator\Reservations\Controller\Backend;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\Reservations\Domain\Repository\ReservationRepository;

#[AsController]
class ReservationsController extends ActionController
{
    /**
     * ReservationsController constructor
     *
     * @param ModuleTemplateFactory $moduleTemplateFactory
     * @param ReservationRepository $reservationRepository
     */
    public function __construct(
        protected readonly ModuleTemplateFactory $moduleTemplateFactory,
        protected readonly ReservationRepository $reservationRepository,
    ) {}

    /**
     * List action to display a list of reservations in the backend module.
     *
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function listAction(ServerRequestInterface $request): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($request);

        $reservations = $this->reservationRepository->findCurrentReservations();
        $storagePid = $request->getAttribute('site')->getSettings()->get('reservations.storagePid', 0);
        $moduleTemplate->assignMultiple([
            'reservations' => $reservations,
            'storagePid' => $storagePid
        ]);

        return $moduleTemplate->renderResponse('Reservations/List');
    }
}
