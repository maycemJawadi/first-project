<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class DressType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ref')
            ->add('name')
            ->add('image',FileType::class,array("data_class"=>null))
               ->add('shop',EntityType::class,
            array('class'=>'AppBundle\Entity\Shop','choice_label'=>'name',
        
            'multiple'=>false,
            'choices'=>$options['listShop'],
           'expanded'=>false
            ))
              ->add('categorie',EntityType::class,
            array('class'=>'AppBundle\Entity\Categorie','choice_label'=>'name',
        
            'multiple'=>false,
            'choices'=>$options['listCategorie'],
           'expanded'=>false
            ));
      
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dress'
        ));
         $resolver->setRequired(array('listCategorie'));
          $resolver->setRequired(array('listShop'));
    }
}
