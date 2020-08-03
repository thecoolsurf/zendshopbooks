<?php

namespace App\Entity;

class Page
{
    private $id;
    private $h1;
    private $slug;
    private $bodies;

    /* ********************************************************************** */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getH1(): ?string
    {
        return $this->h1;
    }

    public function setH1(string $h1): self
    {
        $this->h1 = $h1;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getBodies()
    {
        return $this->bodies;
    }

}
