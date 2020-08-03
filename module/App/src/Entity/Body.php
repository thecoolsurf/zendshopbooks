<?php

namespace App\Entity;

class Body
{

    private $id;
    private $h2;
    private $paragraph;
    private $page;
    private $icon;
    
    /* ********************************************************************** */

    public function getId()
    {
        return $this->id;
    }

    public function getH2()
    {
        return $this->h2;
    }

    public function setH2(string $h2)
    {
        $this->h2 = $h2;
        return $this;
    }

    public function getParagraph()
    {
        return $this->paragraph;
    }

    public function setParagraph(string $paragraph)
    {
        $this->paragraph = $paragraph;
        return $this;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
        return $this;
    }
    
}
