<?php


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

    if ($_SESSION['username'] == null) {
        $y = 'Not found';
    }
} else {
    null;
}
session_start();
$x = $_SESSION['username'];
?>

<html>
<body>
<form action="/" method="post">
    <label for="searchCode">Enter Pin:</label>
    <input type="text" id="searchCode" name="searchCode"/>
    <button type="submit">
        submit
    </button>
    <h3> <?php echo 'Your username is: ' . $x; ?> </h3>
    <h4> <?php echo $y; ?> </h4>



</form>
</body>
</html>
