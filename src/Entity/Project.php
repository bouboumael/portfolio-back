<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProjectRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $title;

    #[ORM\Column(type: 'string', length: 255)]
    private string $description;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $year;

    #[ORM\Column(type: 'string', length: 255)]
    private string $subDescription;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imgSrc;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $imgAlt;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $link;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getSubDescription(): ?string
    {
        return $this->subDescription;
    }

    public function setSubDescription(string $subDescription): self
    {
        $this->subDescription = $subDescription;

        return $this;
    }

    public function getImgSrc(): ?string
    {
        return $this->imgSrc;
    }

    public function setImgSrc(?string $imgSrc): self
    {
        $this->imgSrc = $imgSrc;

        return $this;
    }

    public function getImgAlt(): ?string
    {
        return $this->imgAlt;
    }

    public function setImgAlt(?string $imgAlt): self
    {
        $this->imgAlt = $imgAlt;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
