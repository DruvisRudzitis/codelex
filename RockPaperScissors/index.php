<?php

$colors = [
    $colorRock = 'red',
    $colorPaper = 'green',
    $colorScissors = 'blue'
];

$combinations = [
    'ROCK' => 'SCISSORS',
    'PAPER' => 'ROCK',
    'SCISSORS' => 'PAPER'
];
$pc =  array_rand($combinations);
$input =  strtoupper( $_GET["choice"] );

if($pc == 'ROCK') {
    $pcColor = 'red';
} elseif ($pc == 'PAPER'){
    $pcColor = 'green';
}elseif($pc = 'SCISSORS'){
    $pcColor = 'blue';
}

if($input == 'ROCK') {
    $inputColor = 'red';
} elseif ($input == 'PAPER'){
    $inputColor = 'green';
}elseif ($input == 'SCISSORS'){
    $inputColor = 'blue';
}

$results = "";
if ($input == null) {
    $results = 'Start Game';
    $pc = null;
    $pcColor = null;
}elseif ($input == $pc) {
    $results = 'DRAW';
} elseif ($combinations[$input] == $pc) {
    $results = 'WIN';
} else {
    $results = 'LOOSE';
}

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .result {
        text-align: center;
        font-size: 40px;
        font-family: "Times New Roman", Times, serif;
        max-width: 500px;
    }
    .choice {
        display:inline-block;
        flex-direction: row;
        text-align: center;
        padding: 5px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;
        font-family: "Times New Roman", Times, serif;
        max-width: 500px;
    }
    .input {
        flex-direction: row;
        text-align: center;
        padding: 5px;
        font-size: 20px;
        font-family: "Times New Roman", Times, serif;
        margin-left: auto;
        margin-right: auto;
        max-width: 500px;
    }
</style>
<body>

<form action="/" method="get">

    <h1 class="result"><?php echo $results; ?></h1>

    <div class="choice" style="width: 150px;height: 40px;background-color: <?php echo $inputColor; ?>"> <?php echo $input; ?> </div>
    <div class="choice" style="width: 150px;height: 40px;background-color: white">
    <p><strong>VS</strong></p></div>
    <div class="choice" style="width: 150px;height: 40px;background-color: <?php echo $pcColor; ?>"> <?php echo $pc; ?> </div>

    <h3></h3>

    <input class="input" type="submit" style="width: 200px;height: 100px;background-color: <?php echo $colorRock; ?>" name="choice" value="ROCK">
    <input class="input" type="submit" style="width: 200px;height: 100px;background-color: <?php echo $colorPaper ?>" name="choice" value="PAPER">
    <input class="input" type="submit" style="width: 200px;height: 100px;background-color: <?php echo $colorScissors; ?>" name="choice" value="SCISSORS">

</form>
</body>
</html>