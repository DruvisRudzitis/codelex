<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$code = $_POST['code'];
$address = $_POST['address'];

extract($_POST);
$file = fopen('person.csv','a');

fwrite($file, $name . ", ");
fwrite($file, $surname . ", ");
fwrite($file, $code . ", ");
fwrite($file, $address . "\n");


while($row = fgetcsv($file)) {
    if (in_array("codes", $row)) {
        echo implode(' , ', $row);
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
    <label for="code">Enter personal code:</label>
    <input type="text" id="codes" name="codes"/>
    <button type="submit">
        submit
    </button>
    <h2 <?php echo implode(' , ', $row); ?>  </h2>
</form>
</body>
</html>
