<?php

namespace Paes\AmministratoreBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Paes\ComuneBundle\Entity\Comune;
use Paes\UserBundle\Entity\User;



class ComuneType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder,  array $options){


        $builder
            ->add("nome", "text")
            ->add("descrizione", "text")
            ->add("superfcie", "text")
            ->add("abitanti", "text")
            ->add("latitudine", "text")
            ->add("longitudine", "text")
            ->add("salva", "submit")
            ->setMethod("POST");

    }


    public function getName(){
        return "amministratore_comune_type";
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            "data_class" => "Paes\ComuneBundle\Entity\Comune",
            'cascade_validation' => true,

        ));
    }
}