<?php

namespace App\Form;

use App\Entity\MdfeIdeInfContratante;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeInfContratanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cnpj', null, [ 'label' => 'CNPJ' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeInfContratante::class,
        ]);
    }
}
