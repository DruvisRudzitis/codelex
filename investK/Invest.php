<?php
class Invest
{
    private $investment;
    private $interestRate;
    private $year;

    public function getInvestment()
    {
        return $this->investment = $_GET["investment"];
    }
    public function getInterestRate()
    {
        return $this->interestRate = $_GET["interestRate"];
    }
    public function getYear()
    {
        return $this->year = $_GET["years"];
    }

}