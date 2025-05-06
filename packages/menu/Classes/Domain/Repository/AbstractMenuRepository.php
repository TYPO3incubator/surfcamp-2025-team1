<?php

declare(strict_types=1);

namespace TYPO3Incubator\Menu\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3Incubator\Menu\Domain\Model\Dish;

class AbstractMenuRepository extends Repository
{
    /**
     * Receive menu items by uids
     *
     * @param array<int> $uids array of uids.
     * @return array<Dish> array of menu objects.
     */
    public function findByUids(array $uids): array
    {
        $menuItems = [];
        foreach ($uids as $uid) {
            $menuItems[] = $this->findByUid($uid);
        }
        return $menuItems;
    }
}
