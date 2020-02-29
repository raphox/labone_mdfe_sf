<?php

namespace App\Form;

use App\Entity\MdfeIdeVeicTracaoCondutor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MdfeIdeVeicTracaoCondutorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('xNome', null, [ 'label' => 'Nome' ])
            ->add('cpf', null, [ 'label' => 'CPF' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MdfeIdeVeicTracaoCondutor::class,
        ]);
    }
}
