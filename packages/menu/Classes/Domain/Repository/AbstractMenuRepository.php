<?php

namespace TYPO3Incubator\Menu\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3Incubator\Menu\Domain\Model\Dish;

class AbstractMenuRepository extends Repository
{
    /**
     * @param array<int> $uids Array of UIDs.
     * @return array<Dish> Array of Menu objects.
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
