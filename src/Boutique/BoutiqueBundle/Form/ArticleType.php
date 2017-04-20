<?php

namespace Boutique\BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomArticle', TextType::class)
            ->add('descriptionArticle', TextType::class)
            ->add('categorieArticle', ChoiceType::class, array('choices'  => array(
                'Vêtements' => 'Vêtements',
                'Accessoires' => 'Accessoires',
            )))
            ->add('prixArticle', MoneyType::class, array('scale'=>2, 'currency'=> 'EUR'))
            ->add('stockArticle', NumberType::class)
            ->add('media')
            
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Boutique\BoutiqueBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'boutique_boutiquebundle_article';
    }


}
