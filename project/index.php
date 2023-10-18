<?php

require __DIR__ . '/../source/MyProject/Models/Users/User.php';
require __DIR__ . '/../source/MyProject/Models/Articles/Article.php';

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);
var_dump($article);