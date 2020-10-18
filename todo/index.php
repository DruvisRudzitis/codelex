<?php

$text = fopen('text.csv', 'a+');
$toRemove = $_POST['remove'];

$xxx = $_SESSION['username'];

if (isset($_POST['message'])) {

    $message = $_POST['message'];
    $file = fopen('text.csv', 'a+');
    fwrite($file, $message . "\n");
} else {
    null;
}
?>

<html>
<body>
<form action="/" method="post">

    <label for="searchCode">Enter message:</label>
    <input type="text" id="message" name="message"/>
    <button type="submit">submit</button>
    <?php
    while ($row = fgetcsv($text)) {
        echo "<div>" . $row[0] . "<button type='submit' name='remove' value=" . ">x</div>\n";
    }
    ?>
</form>
</body>
</html>