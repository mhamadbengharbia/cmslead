<?php

namespace App\Entity;

use App\Repository\PartnerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartnerRepository::class)]
#[ORM\UniqueConstraint(name: 'uniq_partner_slug', fields: ['slug'])]
class Partner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 191)]
    private ?string $slug = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToOne(inversedBy: 'partner', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false, unique: true)]
    private ?User $user = null;

    /**
     * @var Collection<int, LandingPage>
     */
    #[ORM\OneToMany(mappedBy: 'partner', targetEntity: LandingPage::class, orphanRemoval: true)]
    private Collection $landingPages;

    /**
     * @var Collection<int, Lead>
     */
    #[ORM\OneToMany(mappedBy: 'partner', targetEntity: Lead::class)]
    private Collection $leads;

    public function __construct()
    {
        $this->landingPages = new ArrayCollection();
        $this->leads = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

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

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        if ($user !== null && $user->getPartner() !== $this) {
            $user->setPartner($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, LandingPage>
     */
    public function getLandingPages(): Collection
    {
        return $this->landingPages;
    }

    public function addLandingPage(LandingPage $landingPage): static
    {
        if (!$this->landingPages->contains($landingPage)) {
            $this->landingPages->add($landingPage);
            $landingPage->setPartner($this);
        }

        return $this;
    }

    public function removeLandingPage(LandingPage $landingPage): static
    {
        if ($this->landingPages->removeElement($landingPage)) {
            if ($landingPage->getPartner() === $this) {
                $landingPage->setPartner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lead>
     */
    public function getLeads(): Collection
    {
        return $this->leads;
    }

    public function addLead(Lead $lead): static
    {
        if (!$this->leads->contains($lead)) {
            $this->leads->add($lead);
            $lead->setPartner($this);
        }

        return $this;
    }

    public function removeLead(Lead $lead): static
    {
        if ($this->leads->removeElement($lead)) {
            if ($lead->getPartner() === $this) {
                $lead->setPartner(null);
            }
        }

        return $this;
    }
}