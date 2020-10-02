<?php

Class NumberGenerator
{
    private int $min;
    private int $max;

    private array $numbers;

    public function __construct(array $numbers = [], int $min = 1, $max = 100)
    {
        $this->numbers = $numbers;
        $this->min = $min;
        $this->max = $max;
    }

    public function getNumber(): int
    {
        $number = rand($this->min, $this->max);
        $this->add($number);

        return $number;
    }

    public function add(int $number): void
    {
       $this->numbers[] = $number;
    }

    public function getAllNumbers(): array
    {
        return array_filter($this->numbers);
    }

    public function  getAvg(): float
    {
        return array_sum($this->getAllNumbers()) / count($this->getAllNumbers());
    }



}