<?php

namespace Acme\RestaurantsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Raiting
{
    
protected $raiting ;

public function setRaiting($raiting)
  {
        $this->raiting = $raiting;
    
        return $this;
  }
public function getRaiting()
{
        return $this->raiting;
}  
    
    
}
