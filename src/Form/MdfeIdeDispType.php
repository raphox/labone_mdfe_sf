<?php

namespace App\Form;

use App\Entity\MdfeIdeDisp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeDispType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cnpjForn', null, [ 'label' => 'CNPJ da empresa fornecedora do Vale-Pedágio' ])
            ->add('cnpjPg', null, [ 'label' => 'CNPJ do responsável pelo pagamento do Vale-Pedágio' ])
            ->add('cpfPg', null, [ 'label' => 'CNPJ do responsável pelo pagamento do Vale-Pedágio' ])
            ->add('nCompra', null, [ 'label' => 'Número do comprovante de compra' ])
            ->add('vValePed', null, [ 'label' => 'Valor do Vale-Pedágio' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeDisp::class,
        ]);
    }
}
