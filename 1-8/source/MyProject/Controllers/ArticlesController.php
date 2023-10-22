<?php

namespace MyProject\Controllers;

use MyProject\Exceptions\NotFoundException;
use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\View\View;

class ArticlesController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', ['article' => $article]);
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $article->setName("Нью статьяяяяяя");
        $article->setText("Новый теееееекст");

        $article->save();
    }

    public function create()
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setName('Новая статья добавлена');
        $article->setText('Текст новой статьи');
        $article->setAuthor($author);

        $article->save();

        print_r($article);
    }

    public function delete(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        print_r($article);

        $article->delete();

    }
}