<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-reservation-svgicon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:reservations/Resources/Public/Icons/Extension.svg',
    ],
];
