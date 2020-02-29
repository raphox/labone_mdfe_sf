<?php

namespace App\Form;

use App\Entity\MdfeIdeInfCiot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeInfCiotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ciot', null, [ 'label' => 'Código Identificador da Operação de Transporte' ])
            ->add('cpf', null, [ 'label' => 'Número do CPF responsável pela geração do CIOT' ])
            ->add('cnpj', null, [ 'label' => 'Número do CNPJ responsável pela geração do CIOT' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeInfCiot::class,
        ]);
    }
}
