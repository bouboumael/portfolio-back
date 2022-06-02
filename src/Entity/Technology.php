<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TechnologyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TechnologyRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Technology
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $logoSrc;

    #[ORM\Column(type: 'string', length: 255)]
    private string $logoAlt;

    #[ORM\Column(type: 'integer')]
    private int $starNumber;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $title;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogoSrc(): ?string
    {
        return $this->logoSrc;
    }

    public function setLogoSrc(string $logoSrc): self
    {
        $this->logoSrc = $logoSrc;

        return $this;
    }

    public function getLogoAlt(): ?string
    {
        return $this->logoAlt;
    }

    public function setLogoAlt(string $logoAlt): self
    {
        $this->logoAlt = $logoAlt;

        return $this;
    }

    public function getStarNumber(): ?int
    {
        return $this->starNumber;
    }

    public function setStarNumber(int $starNumber): self
    {
        $this->starNumber = $starNumber;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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
}
