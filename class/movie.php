<?php

class Movie
{
    public $name;
    public $genre;
    public $imgUrl;
    public $rating;
    public function __construct($_name, $_genre, $_rating, $_imgUrl = null)
    {
        $imgPlaceholder = 'https://media.istockphoto.com/id/1147544807/it/vettoriale/la-commissione-per-la-immagine-di-anteprima-grafica-vettoriale.jpg?s=612x612&w=0&k=20&c=gsxHNYV71DzPuhyg-btvo-QhhTwWY0z4SGCSe44rvg4=';
        $this->name = $_name;
        $this->genre = $_genre;
        $this->imgUrl = $_imgUrl ?? $imgPlaceholder;
        $this->rating = $_rating;
    }

    public function getStars()
    {
        $stars = $this->rating;
        return ceil($stars / 2);
    }
}
