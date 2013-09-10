<?php

namespace Acme\RestaurantsBundle\Entity;

class Enquiry
{
    protected $raiting;

     public function getRaiting()
    {
        return $this->raiting;
    }
    public function setRaiting($raiting)
    {
        $this->raiting = $raiting;
    }
}
