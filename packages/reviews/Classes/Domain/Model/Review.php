<?php

namespace TYPO3Incubator\Reviews\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Review extends AbstractEntity
{
    /**
     * @var int
     */
    protected int $rating = 0;

    /**
     * @var string
     */
    protected string $comment = '';

    /**
     * @var string
     */
    protected string $reviewerName = '';

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return void
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return void
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getReviewerName(): string
    {
        return $this->reviewerName;
    }

    /**
     * @param string $reviewerName
     * @return void
     */
    public function setReviewerName(string $reviewerName): void
    {
        $this->reviewerName = $reviewerName;
    }
}