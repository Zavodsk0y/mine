<?php

namespace MyProject\Controllers;

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
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', ['article' => $article]);
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $article->setName("Статья нейм");
        $article->setText("Статья текст");

        $article->save();
    }

    public function create()
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setName('Новая статья добавлена');
        $article->setText('Текст новой статьи');
        $article->setAuthor($author);
        $article->setCreatedAt(date('c'));

        $article->create();
    }
}