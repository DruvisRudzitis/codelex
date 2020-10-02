<?php

class NumberStorage
{
    public function load(): array
    {
        return (array) explode(' ', file_get_contents('./file.txt'));
    }

    public function store(array $numbers): void
    {
        file_put_contents('./file.txt', implode(' ', $numbers));
    }
}