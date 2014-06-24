<?php

namespace Paes\AmministratoreBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Paes\ComuneBundle\Entity\Comune;
use Paes\UserBundle\Entity\User;



class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder,  array $options){


        $builder
            ->add("username", "text")
            ->add("email", "email")
            ->add("password", "password")
            ->add("comune", "text")
            ->add('comune', 'entity', array('class' => 'Paes\ComuneBundle\Entity\Comune', 'property'=>'id', 'multiple'  => false, ))
            ->add("salva", "submit")
            ->setMethod("POST");
    }


    public function getName(){
        return "amministratore_user_type";
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            "data_class" => "Paes\UserBundle\Entity\User",
            'cascade_validation' => true,

        ));
    }
}