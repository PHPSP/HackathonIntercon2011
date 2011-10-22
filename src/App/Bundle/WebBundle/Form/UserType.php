<?php

namespace App\Bundle\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('lomadeeId', null, array('label' => 'Qual seu id no Lomadee?'))
            ->add('frequency', 'choice', array(
                'choices' => array("30" => '30 minutos', "60" => 'Uma hora'),
                'label' => 'Frequencia para enviar tweets'
                
            ))
                
            ->add('fallback','choice', array(
                'choices' => array('notweet' => 'Não Tuitar', 'any' => 'Tuitar qualquer coisa'),
                'label' => 'Caso não encontre um produto'
            ))
                
            ->add('hashtag', null, array('label' => 'Incluir uma Hashtag?'))
        ;
    }

    public function getName()
    {
        return 'app_bundle_webbundle_usertype';
    }
}
