<?php

namespace TYPO3Incubator\Menu\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\Menu\Domain\Repository\DrinkRepository;

class DrinkController extends ActionController
{
    public function __construct(
        protected DrinkRepository $drinkRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->view->assign('drinks', $this->drinkRepository->findAll());
        return $this->htmlResponse();
    }
}
