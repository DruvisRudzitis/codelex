<?php

$searchCode = $_POST['searchCode'];

$file = fopen('data.csv', 'a+');

if (isset($_POST['searchCode'])) {

    $x = '';

    while ($row = fgetcsv($file)) {
        if ($row[2] == $searchCode) {
            $x = $row[0] . $row[1];

        }
    }

    if ($x == null) {
        $y = 'Telefona numurs netika atrasts';
    }
} else {
    null;
}

?>

<html>
<body>
<form action="/" method="post">
    <label for="searchCode">Telefona numurs:</label>
    <input type="text" id="searchCode" name="searchCode"/>
    <button type="submit">
        Log in
    </button>
    <h3> <?php echo $x; ?> </h3>
    <h3> <?php echo $y; ?> </h3>
    <br>
    <label for="searchCode">xxx:</label>
    <input type="text" id="searchCode" name="searchCode"/>
    <button type="submit">
        Log in
    </button>
    <h1>dfdf</h1>
</form>
</body>
</html>