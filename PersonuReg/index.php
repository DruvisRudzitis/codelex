<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$code = $_POST['code'];
$address = $_POST['address'];
$searchCode = $_POST['searchCode'];

$file = fopen('person.csv', 'a+');

if ($name !== NULL && $surname !== NULL && $code !== NULL && $address !== NULL) {
    fwrite($file, $name . ",");
    fwrite($file, $surname . ",");
    fwrite($file, $code . ",");
    fwrite($file, $address . "\n");
} else {
    while ($row = fgetcsv($file)) {
        if ($row[2] == $searchCode) {
            echo implode(', ', $row);
        }
    }
}

?>

<html>
<body>
<form action="/" method="post">
    <h1>Enter personal data</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"/>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname"/>
    <label for="code">Personal code:</label>
    <input type="text" id="code" name="code"/>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address"/>
    <button type="submit">
        submit
    </button>

</form>
</body>
<body>
<form action="/" method="post">
    <h1>Search person</h1>
    <label for="searchCode">Enter personal code:</label>
    <input type="text" id="searchCode" name="searchCode"/>
    <button type="submit">
        submit
    </button>
    <h2 <?php echo implode(' , ', $row); ?> </h2>
</form>
</body>
</html>
