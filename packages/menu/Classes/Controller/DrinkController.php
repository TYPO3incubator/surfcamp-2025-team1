<?php

namespace TYPO3Incubator\Menu\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;
use TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException;
use TYPO3Incubator\Menu\Domain\Model\Drink;
use TYPO3Incubator\Menu\Domain\Repository\DrinkRepository;

class DrinkController extends ActionController
{
    public function __construct(
        protected DrinkRepository $drinkRepository
    )
    {
    }

    public function showAction(Drink $drink): ResponseInterface
    {
        $this->view->assign('drink', $drink);
        return $this->htmlResponse();
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('drinks', $this->drinkRepository->findAll());
        return $this->htmlResponse();
    }

    /**
     * @throws IllegalObjectTypeException
     */
    public function createAction(Drink $drink): ResponseInterface
    {
        $this->drinkRepository->add($drink);
        return $this->redirect('list');
    }

    /**
     * @throws IllegalObjectTypeException
     */
    public function deleteAction(Drink $drink): ResponseInterface
    {
        $this->drinkRepository->remove($drink);
        return $this->redirect('list');
    }

    /**
     * @throws UnknownObjectException
     * @throws IllegalObjectTypeException
     */
    public function updateAction(Drink $drink): ResponseInterface
    {
        $this->drinkRepository->update($drink);
        return $this->redirect('list');
    }
}
