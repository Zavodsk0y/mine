<?php

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;

class Article extends ActiveRecordEntity
{
    protected $name;

    protected $text;

    protected $authorId;

    protected $createdAt;

    public function getName(): string
    {
        return $this->name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthorId(): int
    {
        return (int) $this->authorId;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}