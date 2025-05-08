<?php

declare(strict_types=1);

namespace TYPO3Incubator\Reservations\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Reservation Model
 */
class Reservation extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $firstName = '';

    /**
     * @var string
     */
    protected string $lastName = '';

    /**
     * @var int
     */
    protected int $numberOfPersons = 1;

    /**
     * @var string
     */
    protected string $telephone = '';

    /**
     * @var string
     */
    protected string $email = '';

    /**
     * @var \DateTime
     */
    protected \DateTime $reservationTime;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getNumberOfPersons(): int
    {
        return $this->numberOfPersons;
    }

    /**
     * @param int $numberOfPersons
     * @return void
     */
    public function setNumberOfPersons(int $numberOfPersons): void
    {
        $this->numberOfPersons = $numberOfPersons;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return void
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime|null
     */
    public function getReservationTime(): ?\DateTime
    {
        return $this->reservationTime;
    }

    /**
     * @param \DateTime $reservationTime
     * @return void
     */
    public function setReservationTime(\DateTime $reservationTime): void
    {
        $this->reservationTime = $reservationTime;
    }
}
