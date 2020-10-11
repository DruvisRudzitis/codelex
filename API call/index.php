<?php

require_once './Personx.php';
require_once 'PersonStorage.php';

$personStorage = new PersonStorage();

$name = $_POST['name'] ?? 'Janis';

$person = $personStorage->getByName($name);

echo $person->getName() . ' \ ' . $person->getAge() . ' / ' . $person->getCount();

?>

<html>
<body>
<form action="/" method="post">
<label for="name">Name</label>
    <input type="text" id="name" name="name"/>
    <button type="submit">
        submit
    </button>
</form>
</body>
</html>
