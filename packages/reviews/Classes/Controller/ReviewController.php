<?php

namespace TYPO3Incubator\Reviews\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\ArrayPaginator;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use TYPO3\CMS\Core\Pagination\SlidingWindowPagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3Incubator\Reviews\Domain\Model\Review;
use TYPO3Incubator\Reviews\Domain\Repository\ReviewRepository;

class ReviewController extends ActionController
{
    public function __construct(
      private readonly ReviewRepository $reviewRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->reviewRepository->setDefaultOrderings(['createdAt' => QueryInterface::ORDER_DESCENDING]);
        $reviews = $this->reviewRepository->findAll();
        $currentPage = $this->request->hasArgument('currentPageNumber')
            ? (int)$this->request->getArgument('currentPageNumber')
            : 1;
        $itemsPerPage = 10;
        $maximumLinks = 10;

        $paginator = new QueryResultPaginator(
            $reviews,
            $currentPage,
            $itemsPerPage,
        );
        $pagination = new SlidingWindowPagination(
            $paginator,
            $maximumLinks
        );

        $this->view->assignMultiple([
            'pagination' => $pagination,
            'paginator' => $paginator,
        ]);

        return $this->htmlResponse();
    }

    public function createAction(Review $review): ResponseInterface
    {
        $this->reviewRepository->add($review);
        return $this->redirect('list');
    }
}