<?php

namespace TYPO3Incubator\Reservations\Controller\Backend;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\Reservations\Domain\Repository\ReservationRepository;

#[AsController]
class ReservationsController extends ActionController
{
    public function __construct(
        protected readonly ModuleTemplateFactory $moduleTemplateFactory,
        protected readonly ReservationRepository $reservationRepository,
    ) {}

    public function listAction(ServerRequestInterface $request): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($request);

        $reservations = $this->reservationRepository->findAll();
        $moduleTemplate->assign('reservations', $reservations);

        return $moduleTemplate->renderResponse('Reservations/List');
    }
}
