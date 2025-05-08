<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-opening-hours-svgicon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:opening_hours/Resources/Public/Icons/Extension.svg',
    ],
];
