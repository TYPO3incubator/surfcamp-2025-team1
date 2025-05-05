<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;
use TYPO3Incubator\Menu\Domain\Repository\DishRepository;
use TYPO3Incubator\Menu\Domain\Repository\DrinkRepository;

final class MenuController extends AbstractController {

    public function __construct(
        protected DishRepository $dishRepository,
        protected DrinkRepository $drinkRepository
    )
    {
    }

    public function listAction(): ResponseInterface
    {
        $menuDishes = $this->getMenuDishesUids();
        $menuDrinks = $this->getMenuDrinksUids();
        $dishes = $this->fetchDishes($menuDishes);
        $drinks = $this->fetchDrinks($menuDrinks);

        $this->view->assignMultiple([
            $dishes,
            $drinks
        ]);

        return $this->htmlResponse();
    }

    public function getMenuDishesUids(): array
    {
        return GeneralUtility::intExplode(',', $this->settings['menuDishes'], true);
    }

    public function getMenuDrinksUids(): array
    {
        return GeneralUtility::intExplode(',', $this->settings['menuDrinks'], true);
    }

    private function fetchDishes(array $uids): array
    {
        return $this->dishRepository->findByUids($uids);
    }

    private function fetchDrinks(array $uids): array
    {
        return $this->drinkRepository->findByUids($uids);
    }

}
