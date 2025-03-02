<?php

class Animal{
    public string $name;
    public float $weightKg;
    public float $heightM;
    public bool $isPredator;
    public float $speedKph;
    public static float $activityMultiplier = 1.2;

    function __construct(string $name, float $weightKg, float $heightM, bool $isPredator, float $speedKph){
        $this->name = $name;
        $this->weightKg = $weightKg;
        $this->heightM = $heightM;
        $this->isPredator = $isPredator;
        $this->speedKph = $speedKph;
    }

    public function getBmi(): float{
        return floor($this->weightKg / ($this->heightM ** 2) * 100) / 100;
    }

    public function getDailyCalories(): float{
        return floor((70 * pow($this->weightKg, 0.75) * self::$activityMultiplier) * 100) / 100;
    }

    public function isDangerous(): bool{
        return $this->isPredator || $this->heightM >= 1.7 || $this->speedKph >= 35;
    }
}
