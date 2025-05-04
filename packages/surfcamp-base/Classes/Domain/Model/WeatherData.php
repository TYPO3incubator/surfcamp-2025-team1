<?php

namespace TYPO3Incubator\SurfcampBase\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class WeatherData extends AbstractEntity {
    protected float $humidity = 0;
    protected float $temp = 0;
    protected bool $alarm = false;
    protected float $brightness = 0;

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function setHumidity(float $humidity): void
    {
        $this->humidity = $humidity;
    }

    public function getTemp(): float
    {
        return $this->temp;
    }

    public function setTemp(float $temp): void
    {
        $this->temp = $temp;
    }

    public function isAlarm(): bool
    {
        return $this->alarm;
    }

    public function setAlarm(bool $alarm): void
    {
        $this->alarm = $alarm;
    }

    public function getBrightness(): float
    {
        return $this->brightness;
    }

    public function setBrightness(float $brightness): void
    {
        $this->brightness = $brightness;
    }
}
