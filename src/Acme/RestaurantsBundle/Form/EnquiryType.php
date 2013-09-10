<?php

// src/Acme/RestaurantsBundle/Form/EnquiryType.php
namespace Acme\RestaurantsBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder->add('Raiting');
    }

    public function getName()
    {
        return 'sidebar';
    }
}
