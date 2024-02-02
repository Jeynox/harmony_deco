<?php

namespace App\Form;


use App\Entity\Produit;
use App\Entity\SousCategory;
use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Nom']
            ])
            ->add('quantity', IntegerType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Quantité']
            ])
            ->add('description', TextareaType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Déscription']
            ])
            ->add('price', NumberType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Prix']
            ])
            ->add('image', VichFileType::class, [
                'required' => false,
                'allow_delete' => true, 
                'download_uri' => true,
            ])
            //->add('sousCategory', EntityType::class, [
            //    'class' => SousCategory::class,
            //    'choice_label' => 'nom', 
            //    'placeholder' => 'Sélectionnez une sous-catégorie', 
            //]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}