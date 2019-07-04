<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $article_title;

    /**
     * @ORM\Column(type="text")
     */
    private $article_contents;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getArticleTitle(): ?string
    {
        return $this->article_title;
    }

    public function setArticleTitle(string $article_title): self
    {
        $this->article_title = $article_title;

        return $this;
    }

    public function getArticleContents(): ?string
    {
        return $this->article_contents;
    }

    public function setArticleContents(string $article_contents): self
    {
        $this->article_contents = $article_contents;

        return $this;
    }
}
