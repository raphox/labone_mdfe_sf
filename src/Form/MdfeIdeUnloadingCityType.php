<?php

namespace App\Form;

use App\Entity\MdfeIdeUnloadingCity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType;

class MdfeIdeUnloadingCityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city', EasyAdminAutocompleteType::class, [
                'label' => 'Cidade',
                'class' => 'App\Entity\City',
            ])
            ->add('mdfeIdeUnloadingCityDocuments', CollectionType::class, [
                'label' => 'Notas fiscais',
                'entry_type' => MdfeIdeUnloadingCityDocumentType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeUnloadingCity::class,
        ]);
    }
}
