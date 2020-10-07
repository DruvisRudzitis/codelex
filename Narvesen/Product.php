<?php

Class Product
{

    private string $name;
    private int $price;
    private int $amount;

    Public function __construct( string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    Public function name(): string
    {
        return $this->name;
    }

    Public function price(): int
    {
        return $this->price;
    }

    Public function amount(): int
    {
        return $this->amount;
    }


}