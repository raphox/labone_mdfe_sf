<?php

namespace App\Form;

use App\Entity\MdfeIdeVeicTracao;
use App\Entity\State;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MdfeIdeVeicTracaoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cInt', null, [ 'label' => 'Código interno do veículo' ])
            ->add('placa', null, [ 'label' => 'Placa' ])
            ->add('tara', null, [ 'label' => 'Tara em KG' ])
            ->add('capKG', null, [ 'label' => 'Capacidade em KG' ])
            ->add('tpCar', ChoiceType::class, [
                'label' => 'Tipo de Carroceria',
                'choices' => [
                    'Não aplicável' => '00',
                    'Aberta' => '01',
                    'Fechada/Baú' => '02',
                    'Granelera' => '03',
                    'Porta Container' => '04',
                    'Sider' => '05',
                ]
            ])
            ->add('tpRod', ChoiceType::class, [
                'label' => 'Tipo de Rodado',
                'choices' => [
                    'Truck' => '01',
                    'Toco' => '02',
                    'Cavalo Mecânico' => '03',
                    'VAN' => '04',
                    'Utilitário' => '05',
                    'Outros' => '06',
                ]
            ])
            ->add('uf', EntityType::class, [
                'label' => 'UF em que veículo está licenciado',
                'class' => State::Class,
                'choice_label' => 'uf',
            ])
            ->add('propCpf', null, [ 'label' => 'Número do CPF' ])
            ->add('propCnpj', null, [ 'label' => 'Número do CNPJ' ])
            ->add('propRntrc', null, [ 'label' => 'Registro Nacional dos Transportadores Rodoviários de Carga' ])
            ->add('propXNome', null, [ 'label' => 'Razão Social ou Nome do proprietário' ])
            ->add('propIe', null, [ 'label' => 'Inscrição Estadual' ])
            ->add('propUf', EntityType::class, [
                'label' => 'UF',
                'class' => State::Class,
                'choice_label' => 'uf',
            ])
            ->add('tpProp', ChoiceType::class, [
                'label' => 'Tipo Proprietário',
                'choices' => [
                    'TAC Agregado' => '0',
                    'TAC Independente' => '1',
                    'Outros' => '2',
                ]
            ])
            ->add('mdfeIdeVeicTracaoCondutors', CollectionType::class, [
                'label' => 'Condutores',
                'entry_type' => MdfeIdeVeicTracaoCondutorType::class,
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
            'data_class' => MdfeIdeVeicTracao::class,
        ]);
    }
}
