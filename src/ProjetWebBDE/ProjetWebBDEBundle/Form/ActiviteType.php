<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActiviteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomActivite', TextType::class)
            ->add('lieuActivite', TextType::class)
            ->add('prixActivite', MoneyType::class, array('scale'=>2, 'currency'=> 'EUR'))
            ->add('dateActivite', DateType::class)
            ->add('heureActivite', TimeType::class)
            ->add('descriptionActivite', TextType::class)
            ->add('recurrenceActivite', TextType::class)
            ->add('media')
            
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetWebBDE\ProjetWebBDEBundle\Entity\Activite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetwebbde_projetwebbdebundle_activite';
    }


}
