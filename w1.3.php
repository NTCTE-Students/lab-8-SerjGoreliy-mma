<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}";
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this-> pages = $pages;
    }

    public function getBookInfo() {
        return $this->getInfo() . " - Pages: {$this->pages}";
    }
}

class Article extends Material {
    public function getArticleInfo() {
        return $this->getInfo();
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getVideoInfo() {
        return $this->getInfo() . " - Duration: {$this->duration} minutes";
    }
}

$book = new Book("Война и Мир", "Лев Толстой", 300);
$article = new Article("Как заработать миллион", "Арсен Маркарян");
$video = new Video("Гайд по Squad", "Игрок", 45);
