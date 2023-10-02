<?php

class Voiture
{
    private $marque;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

}