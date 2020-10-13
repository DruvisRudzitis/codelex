<?php

$investment = $_GET["investment"];
$interestRate = $_GET["interestRate"];
$year = $_GET["years"];

$x=1;
while ($x <= $year){
    $investment = $investment*(1+$interestRate/100);
        $x++;
}


?>

<html>
<body>
<form action="/" method="get">
    <h1 class="result">This investment will be worth: $<?php echo round($investment); ?>  </h1>
<label for="name">Starting Amount:</label>
    <input type="text" id="investment" name="investment"/>
        <label for="surname">Rate of Return:</label>
            <input type="text" id="interestRate" name="interestRate"/>
                <label for="code">Years to Grow:</label>
                    <input type="text" id="years" name="years"/>
    <button type="submit">
    submit
    </button>
</form>
</body>
</html>