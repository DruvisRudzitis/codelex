<?php

$text = fopen('text.csv', 'a+');

$searchCode = $_POST['searchCode'];
$file = fopen('file.csv', 'a+');
$_SESSION['username'] = "";
if (isset($_POST['searchCode'])) {

    while ($row = fgetcsv($file)) {
        if ($row[1] == $searchCode) {
            session_start();
            $_SESSION['username'] = $row[0];

        }
    }
} else {
    null;
}
session_start();
$xxx = $_SESSION['username'];

if (isset($_POST['message'])) {
$message = $_POST['message'];
$file = fopen('text.csv', 'a+');
fwrite($file,  $xxx . ": " . $message . "\n");
} else {
    null;
}

if (isset($_POST['logout']))
{
    unset($_SESSION['username']);
} else {
    null;
}

?>

<html>
<body>
<form action="/" method="post">
    <label for="searchCode">Enter Pin:</label>
    <input type="text" name="searchCode"/>
    <button type="submit">Log in</button>
    <button type="submit" value="logout" name="logout">Log out</button>
    <h3> <?php echo 'Your username is: ' . $xxx; ?> </h3>

    <label for="searchCode">Enter message:</label>
    <input type="text" id="message" name="message"/>
    <button type="submit">submit</button>
    <?php
    while ($row = fgetcsv($text)) {
        echo "<div>" . $row[0] . "</div>\n";
    }
    ?>
</form>
</body>
</html>
