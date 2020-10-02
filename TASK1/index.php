<?php

require_once 'NumberGenerator.php';
require_once 'NumberStorage.php';

$numberStorage = new NumberStorage();
$numberGenerator = new NumberGenerator($numberStorage->load(), 1, 1000);

$randomNumber = $numberGenerator->getNumber();

$allNumbers = $numberGenerator->getAllNumbers();

$numberStorage->store($allNumbers);

echo 'Number chain: ' . implode(' ', $numberGenerator->getAllNumbers()) . PHP_EOL;
echo 'Nev number: ' . $randomNumber . PHP_EOL;
echo 'AVG: ' . number_format($numberGenerator->getAvg(),2) . PHP_EOL;