<?php

namespace Acme\RestaurantsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name',    'text')
            ->add('Email',   'email')
            ->add('Subject', 'text')
            ->add('Body',    'text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\RestaurantsBundle\Entity\Contact'
        ));
    }

    public function getName()
    {
        return 'contact';
        //acme_restaurantsbundle_contacttype
    }
}
