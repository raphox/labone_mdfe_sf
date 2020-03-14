<?php

namespace App\Form;

use App\Entity\MdfeIdeTot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeTotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qCTe', null, [ 'label' => 'Quantidade total de CT-e relacionados no Manifesto' ])
            ->add('qNFe', null, [ 'label' => 'Quantidade total de NF-e relacionadas no Manifesto' ])
            ->add('qMDFe', null, [ 'label' => 'Quantidade total de MDF-e relacionados no Manifesto Aquaviário' ])
            ->add('vCarga', null, [ 'label' => 'Valor total da carga / mercadorias transportadas' ])
            ->add('cUnid', ChoiceType::class, [
                'label' => 'Código da unidade de medida do Peso Bruto da Carga / Mercadorias transportadas',
                    'choices' => [
                    'KG' => '1',
                    'TON' => '2',
                ]
            ])
            ->add('qCarga', null, [ 'label' => 'Peso Bruto Total da Carga / Mercadorias transportadas' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeTot::class,
        ]);
    }
}
