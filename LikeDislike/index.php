<?php


require_once 'Picture.php';
require_once 'Like.php';
require_once 'Dislike.php';

$data = new Picture();
$like = new Like();
$disLike = new Disike();

if (isset($_POST['like']))
{
    $like->saveLike($like);

} elseif (isset($_POST['dislike']))
{
    $disLike->saveDisLike($disLike);

}

$likes = $like->showLike();
$disLikes = $disLike->showDisLike();
$picture = $data->getPicture();

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="post">
<picture>
    <source srcset=<?php echo  $picture[0]; ?>>
    <img width="500">
</picture>
    <br>
    <?php echo strlen($likes[0]); ?>
<button type="submit" name="like">like</button>
<button type="submit" name="dislike">dislike</button>
    <?php echo strlen($disLikes[0]); ?>
</body>
</html>
