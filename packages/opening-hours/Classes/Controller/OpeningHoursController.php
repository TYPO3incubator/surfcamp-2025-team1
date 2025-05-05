<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\OpeningHours\Domain\Repository\OpeningHoursRepository;

class OpeningHoursController extends ActionController
{
    public function __construct(
        private readonly OpeningHoursRepository $openingHoursRepository,
    )
    {
    }
    public function indexAction(): ResponseInterface
    {
        $openingHours = $this->openingHoursRepository->findAll();
        $this->view->assign('openingHours', $openingHours);

        return $this->htmlResponse();
    }
}
