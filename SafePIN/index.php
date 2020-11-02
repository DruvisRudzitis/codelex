<?php

require_once 'Pin.php';

session_start();

$safe = new Pin(1234);

if (isset($_POST['pin'])) {
    $_SESSION['pin'] .= $_POST['pin'];
}

$pin = $_SESSION['pin'] ?? '';

if (strlen($pin) == 4){
    $_SESSION['pin'] = '';
    $locked =!($pin === $safe->getPin());
}
?>

<html>
<body>
<?php if (strlen($pin) === 4): ?>
    <?php echo $locked ? 'Locked' : 'Unlocked'; ?>
<?php endif; ?>

<?php echo str_repeat('*', strlen($pin)); ?>
<form action="" method="post">
    <button type="submit" value="1" name="pin">1</button>
    <button type="submit" value="2" name="pin">2</button>
    <button type="submit" value="3" name="pin">3</button>
    <br>
    <button type="submit" value="4" name="pin">4</button>
    <button type="submit" value="5" name="pin">5</button>
    <button type="submit" value="6" name="pin">6</button>
    <br>
    <button type="submit" value="7" name="pin">7</button>
    <button type="submit" value="8" name="pin">8</button>
    <button type="submit" value="9" name="pin">9</button>
    <br>
    <button type="submit" value="0" name="pin">0</button>
</form>
</body>
</html>
