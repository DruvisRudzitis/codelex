<?php

class Person
{
    private string $name;
    private int $funds;

    public function __construct(string $name, int $funds)
    {
        $this->name = $name;
        $this->funds = $funds;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function funds(): int
    {
        return $this->funds;
    }
}