<?php

class Movie
{
    public $name;
    public $genre = [];
    public $imgUrl;

    function __construct($name, array $genre, $imgUrl)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->imgUrl = $imgUrl;
    }
}
