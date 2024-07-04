<?php

namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;

class ContactDTO
{
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
    #[Assert\Length(min: 2, max: 50, minMessage: "Le nom doit faire au moins 2 caractères.", maxMessage: "Le nom ne peut pas dépasser 50 caractères.")]
    private $name;

    #[Assert\NotBlank(message: "L'adresse email ne peut pas être vide.")]
    #[Assert\Email(message: "L'adresse email '{{ value }}' n'est pas valide.")]
    private $email;

    #[Assert\NotBlank(message: "Le message ne peut pas être vide.")]
    #[Assert\Length(min: 10, max: 200, minMessage: "Le message doit faire au moins 10 caractères.", maxMessage: "Le message ne peut pas dépasser 500 caractères.")]
    private $message;

    private $enterprise;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getEnterprise(): ?string
    {
        return $this->enterprise;
    }

    public function setEnterprise(string $enterprise): void
    {
        $this->enterprise = $enterprise;
    }
}