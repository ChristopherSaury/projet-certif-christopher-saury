<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Dishes::class, inversedBy="orders")
     */
    private $dish;

    public function __construct()
    {
        $this->dish = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Dishes[]
     */
    public function getDish(): Collection
    {
        return $this->dish;
    }

    public function addDish(Dishes $dish): self
    {
        if (!$this->dish->contains($dish)) {
            $this->dish[] = $dish;
        }

        return $this;
    }

    public function removeDish(Dishes $dish): self
    {
        $this->dish->removeElement($dish);

        return $this;
    }
}
