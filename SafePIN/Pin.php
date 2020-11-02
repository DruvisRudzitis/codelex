<?php

class Pin
{
    private string $pin;


    public function __construct(string $pin)
    {
        $this->pin = $pin;
    }

    public function getPin(): string
    {
        return $this->pin;
    }
}