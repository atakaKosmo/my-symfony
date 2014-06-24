<?php

namespace Paes\AmministratoreBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Paes\AreaProduttivaBundle\Entity\AreaProduttiva;


class AreaProduttivaType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder,  array $options){


        $builder
            ->add("nome", "text")
            ->add("salva", "submit")
            ->setMethod("POST");

    }


    public function getName(){
        return "amministratore_areaproduttiva_type";
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            "data_class" => "Paes\AreaProduttivaBundle\Entity\AreaProduttiva",
            'cascade_validation' => true,

        ));
    }
}