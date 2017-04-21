<?php

namespace ProjetWebBDE\ProjetWebBDEBundle\Form;

use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class PropositionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomProposition', TextType::class)
            ->add('descriptionProposition', TextType::class)
            ->add('lieuProposition', TextType::class)
            ->add('date1Proposition', DateTimeType::class)
            ->add('date2Proposition', DateTimeType::class)
            ->add('date3Proposition', DateTimeType::class)
            ->add('prixProposition', MoneyType::class, array('scale'=>2, 'currency'=> 'EUR',
                'constraints' => [new Regex(array('pattern'=>'/\d+(\.\d+)?/','message'=>'Entre un prix !')),]))
            /*
            ->add('recurrenceProposition', CheckboxType::class)
            ->add('recurrenceComm', TextType::class)
            */

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetWebBDE\ProjetWebBDEBundle\Entity\Proposition_activite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetwebbde_projetwebbdebundle_proposer_activite';
    }


}
