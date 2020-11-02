<?php

class Picture
{
    private $picture;

    public function getPicture()
    {
        $picture = fopen('info.csv', 'a+');
        $this->picture = $picture;
        return fgetcsv($picture);
    }

}
