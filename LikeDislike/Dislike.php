<?php

class Disike
{
    private $fileDisLike;
    private $disLike;

    public function __construct()
    {
        $this->fileDisLike = fopen('dislikes.csv', 'rw+');
        $this->showDisLike();
    }

    public function saveDisLike($like)
    {
        fwrite($this->fileDisLike, '1');
    }

    public function showDisLike()
    {
        $disLikeData = fgetcsv($this->fileDisLike);
        $this->disLike[] = $disLikeData[0];
        return $this->disLike;
    }

}