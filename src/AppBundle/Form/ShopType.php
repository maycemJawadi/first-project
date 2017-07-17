<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ShopType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('telephone')
            ->add('adresse')
            ->add('longitude')
            ->add('lattitude')
            ->add('user',EntityType::class,
            array('class'=>'AppBundle\Entity\User','choice_label'=>'firstname',
        
            'multiple'=>false,
            'choices'=>$options['listUser'],
           'expanded'=>false
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Shop'
        ));
           $resolver->setRequired(array('listUser'));
    }
}
