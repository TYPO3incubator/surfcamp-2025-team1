<?php

declare(strict_types=1);

namespace TYPO3Incubator\OpeningHours\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3Incubator\OpeningHours\Domain\Repository\CompanyVacationRepository;

class CompanyVacationController extends ActionController
{
    /**
     * CompanyVacationController constructor
     *
     * @param CompanyVacationRepository $companyVacationRepository
     */
    public function __construct(
        private readonly CompanyVacationRepository $companyVacationRepository
    ) {}

    /**
     * Display company vacations
     *
     * @return ResponseInterface
     */
    public function indexAction(): ResponseInterface
    {
        $companyVacations = $this->companyVacationRepository->findAll();
        $this->view->assign('companyVacations', $companyVacations);

        return $this->htmlResponse();
    }
}
