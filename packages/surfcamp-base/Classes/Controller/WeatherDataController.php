<?php

namespace TYPO3Incubator\SurfcampBase\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3Incubator\SurfcampBase\Domain\Repository\WeatherDataRepository;

class WeatherDataController extends ActionController {

    public function __construct(
        protected WeatherDataRepository $weatherDataRepository
    ) {}

    public function indexAction(): ResponseInterface
    {
        $this->view->assign(
            'weatherData',
            $this->weatherDataRepository->findOneBy(
                [],
                [
                    'uid' => QueryInterface::ORDER_DESCENDING,
                ]
            )
        );
        return $this->htmlResponse();
    }
}
