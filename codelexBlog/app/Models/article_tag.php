<?php

namespace App\Models;

class Article
{
    private int $id;
    private int $article_id;
    private string $tag_id;
    private string $new_column;
    private string $createdAt;

    public function __construct(
        int $id,
        string $article_id,
        string $tag_id,
        string $new_column,
        string $createdAt
    )
    {
        $this->id = $id;
        $this->title = $article_id;
        $this->title = $tag_id;
        $this->content = $new_column;
        $this->createdAt = $createdAt;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function article_id(): string
    {
        return $this->article_id;
    }

    public function tag_id(): string
    {
        return $this->tag_id;
    }
    public function new_column(): string
    {
        return $this->new_column;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }
}