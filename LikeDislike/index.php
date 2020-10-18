<?php
$file = fopen('info.csv', 'a+');
$likes = fopen('likes.csv', 'a+');
$dislikes = fopen('dislikes.csv', 'a+');
$row = fgetcsv($file);
$likes1 = fgetcsv($likes);
$dislikes1 = fgetcsv($dislikes);


if (isset($_POST['like']))
{
    fwrite($likes, '1') ;

} elseif (isset($_POST['dislike']))
{
    fwrite($dislikes, '1');

}

$x = strlen($likes1[0]);
$y = strlen($dislikes1[0]);



?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="post">
<picture>
    <source srcset=<?php echo $row[0]; ?>>
    <img width="500">
</picture>
    <br>
    <?php echo $x; ?>
<button type="submit" name="like">like</button>
<button type="submit" name="dislike">dislike</button>
    <?php echo $y; ?>
</body>
</html>
