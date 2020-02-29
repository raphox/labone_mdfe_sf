<?php

namespace App\Form;

use App\Entity\MdfeIdeUnloadingCityDocument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeUnloadingCityDocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chNFe', null, [ 'label' => 'Nota Fiscal Eletrônica'])
            ->add('SegCodBarra', null, [ 'label' => 'Segundo código de barras'])
            ->add('indReentrega', null, [ 'label' => 'Indicador de Reentrega'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeUnloadingCityDocument::class,
        ]);
    }
}
