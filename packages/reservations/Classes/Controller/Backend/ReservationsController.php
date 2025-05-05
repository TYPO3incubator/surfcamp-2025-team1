<?php

namespace TYPO3Incubator\Reservations\Controller\Backend;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

#[AsController]
class ReservationsController extends ActionController
{
    public function __construct(
        protected readonly ModuleTemplateFactory $moduleTemplateFactory,
    ) {}

    public function listAction(ServerRequestInterface $request): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($request);

        $moduleTemplate->assign('reservations', [['uid' => 1, 'last_name' => 'Test', 'reservation_time' => '2025-05-06 20:00:00'],['uid' => 1, 'last_name' => 'Test', 'reservation_time' => '2025-05-06 21:00:00']]);

        return $moduleTemplate->renderResponse('Reservations/List');
    }
}
