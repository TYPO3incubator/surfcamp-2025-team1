<?php

namespace TYPO3Incubator\Menu\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;
use TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException;
use TYPO3Incubator\Menu\Domain\Model\Dish;
use TYPO3Incubator\Menu\Domain\Repository\DishRepository;

class DishController extends ActionController
{
    public function __construct(
        protected DishRepository $dishRepository
    )
    {
    }

    public function showAction(Dish $dish): ResponseInterface
    {
        $this->view->assign('dish', $dish);
        return $this->htmlResponse();
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('dishes', $this->dishRepository->findAll());
        return $this->htmlResponse();
    }

    /**
     * @throws IllegalObjectTypeException
     */
    public function createAction(Dish $dish): ResponseInterface
    {
        $this->dishRepository->add($dish);
        return $this->redirect('list');
    }

    /**
     * @throws IllegalObjectTypeException
     */
    public function deleteAction(Dish $dish): ResponseInterface
    {
        $this->dishRepository->remove($dish);
        return $this->redirect('list');
    }

    /**
     * @throws UnknownObjectException
     * @throws IllegalObjectTypeException
     */
    public function updateAction(Dish $dish): ResponseInterface
    {
        $this->dishRepository->update($dish);
        return $this->redirect('list');
    }
}
