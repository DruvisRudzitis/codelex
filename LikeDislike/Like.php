<?php

class Like
{
    private $fileLike;
    private $like;

    public function __construct()
    {
        $this->fileLike = fopen('likes.csv', 'rw+');
        $this->showLike();
    }

    public function saveLike($like)
    {
        fwrite($this->fileLike, '1');
    }

    public function showLike()
    {
        $likeData = fgetcsv($this->fileLike);
        $this->like[] = $likeData[0];
        return $this->like;
    }

}