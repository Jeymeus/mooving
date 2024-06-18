<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La marque ne peut pas être vide.")]
    #[Assert\Length(min: 4, max: 50, minMessage: "La marque doit avoir au moins {{ limit }} caractères.", maxMessage: "La marque ne peut pas avoir plus de {{ limit }} caractères.")]
    #[Assert\Regex(pattern: "/^[\p{L}\p{N}\s\-\-']+$/u", message: "Ceci ne semble pas être une marque de véhicule.")]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le modèle ne peut pas être vide.")]
    #[Assert\Length(min: 3, max: 50, minMessage: "Le modèle doit avoir au moins {{ limit }} caractères.", maxMessage: "Le modèle ne peut pas avoir plus de {{ limit }} caractères.")]
    #[Assert\Regex(pattern: "/^[\p{L}\p{N}\s\-\-']+$/u", message: "Ceci ne semble pas être un modèle de véhicule.")]
    private ?string $model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'vehicle', targetEntity: Image::class, cascade: ['persist'], orphanRemoval: true)]
    private Collection $images;

    #[ORM\OneToMany(mappedBy: 'vehicle', targetEntity: Availability::class)]
    private Collection $availabilities;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\ManyToMany(targetEntity: Reservation::class, mappedBy: 'vehicle')]
    private Collection $reservations;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->availabilities = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;
        $this->generateSlug();

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;
        $this->generateSlug();

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setVehicle($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getVehicle() === $this) {
                $image->setVehicle(null);
            }
        }

        return $this;
    }

    private function generateSlug(): void
    {
        if ($this->brand && $this->model) {
            $brand = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $this->brand);
            $model = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $this->model);
            $this->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $brand . '-' . $model), '-'));
        }
    }

    public function getAvailabilities(): Collection
    {
        return $this->availabilities;
    }

    public function addAvailability(Availability $availability): self
    {
        if (!$this->availabilities->contains($availability)) {
            $this->availabilities[] = $availability;
            $availability->setVehicle($this);
        }

        return $this;
    }

    public function removeAvailability(Availability $availability): self
    {
        if ($this->availabilities->removeElement($availability)) {
            // set the owning side to null (unless already changed)
            if ($availability->getVehicle() === $this) {
                $availability->setVehicle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->addVehicle($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            $reservation->removeVehicle($this);
        }

        return $this;
    }

    
}

