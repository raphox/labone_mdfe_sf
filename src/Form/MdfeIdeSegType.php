<?php

namespace App\Form;

use App\Entity\MdfeIdeSeg;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeSegType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('respSeg', ChoiceType::class, [
                'label' => 'Responsável pelo seguro',
                'help' => 'Dados obrigatórios apenas no modal Rodoviário, depois da lei 11.442/07. Para os demais modais esta informação é opcional.',
                'choices' => [
                    'Emitente do MDF-e' => '1',
                    'Responsável pela contratação do serviço de transporte (contratante)' => '2',
                ]
            ])
            ->add('respSegCnpj', null, [
                'label' => 'Número do CNPJ do responsável pelo seguro',
                'help' => 'Obrigatório apenas se responsável pelo seguro for (2) responsável pela contratação do transporte - pessoa jurídica'
            ])
            ->add('respSegCpf', null, [
                'label' => 'Número do CPF do responsável pelo seguro',
                'help' => 'Obrigatório apenas se responsável pelo seguro for (2) responsável pela contratação do transporte - pessoa jurídica'
            ])
            ->add('xSeg', null, [ 'label' => 'Nome da Seguradora' ])
            ->add('cnpj', null, [ 'label' => 'Número do CNPJ da seguradora' ])
            ->add('nApol', null, [ 'label' => 'Número da Apólice' ])
            ->add('nAver', CollectionType::class, [
                'label' => 'Número da Averbação',
                'entry_options' => ['label' => false],
                'entry_type' => TextType::class,
                'allow_add' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeSeg::class,
        ]);
    }
}
