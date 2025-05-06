<?php

namespace TYPO3Incubator\Menu\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\Menu\Domain\Repository\DishRepository;

class DishController extends ActionController
{
    public function __construct(
        protected DishRepository $dishRepository
    )
    {
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('dishes', $this->dishRepository->findAll());
        return $this->htmlResponse();
    }
}
