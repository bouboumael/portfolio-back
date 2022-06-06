<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ContactRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
#[ApiResource(
    collectionOperations: ['get','post'],
    itemOperations: ['get'],
)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[
        Assert\notBlank,
        Assert\Length(
            min: 2,
            max: 255,
            minMessage: "Le prénom doit faire au moins {{ limit }} caractères.",
            maxMessage: "Le prénom ne peut pas faire plus de {{ limit }} caractères."
        )
    ]
    private string $firstname;

    #[ORM\Column(type: 'string', length: 255)]
    #[
        Assert\notBlank,
        Assert\Length(
            min: 2,
            max: 255,
            minMessage: "Le nom doit faire au moins {{ limit }} caractères.",
            maxMessage: "Le nom ne peut pas faire plus de {{ limit }} caractères."
        )
    ]
    private string $lastname;

    #[ORM\Column(type: 'string', length: 255)]
    #[
        Assert\notBlank,
        Assert\Email(
            message: "L'email {{ value }} n'est pas valide."
        )
    ]
    private string $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $phone;

    #[ORM\Column(type: 'string', length: 255)]
    #[
        Assert\notBlank,
        Assert\Length(
            min: 2,
            max: 255,
            minMessage: "Le sujet doit faire au moins {{ limit }} caractères.",
            maxMessage: "Le sujet ne peut pas faire plus de {{ limit }} caractères."
        )
    ]
    private string $subject;

    #[ORM\Column(type: 'string', length: 255)]
    #[
        Assert\notBlank,
        Assert\Length(
            min: 10,
            max: 255,
            minMessage: "Le message doit faire au moins {{ limit }} caractères.",
            maxMessage: "Le message ne peut pas faire plus de {{ limit }} caractères."
        )
    ]
    private string $message;

    #[ORM\Column(type: 'datetime_immutable')]
    private DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'boolean')]
    private bool $isAnswered = false;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function isIsAnswered(): ?bool
    {
        return $this->isAnswered;
    }

    public function setIsAnswered(bool $isAnswered): self
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }
}
