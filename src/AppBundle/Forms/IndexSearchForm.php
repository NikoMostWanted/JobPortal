<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/11/15
 * Time: 18:05
 */

namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IndexSearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('job', 'text', array('label' => false, 'attr' => array(
                'placeholder' => 'Кто?',
                'class' => 'first input'
            ),
                'required' => false))
            ->add('where', 'text', array('label' => false, 'attr' => array(
                'placeholder' => 'Где?',
                'class' => 'second input'
            ),
                'required' => false,))
            ->add('distance', 'choice', array(
                'choices' => array('auto' => 'auto', '15' => '15 км', '30' => '30 км', '45' => '45 км', '60' => '60 км'),
                'placeholder' => 'Км',
                'attr' => array(
                    'class' => 'third input',
                ),
                'label' => false,
                'required' => false
            ))
            ->add('search', 'submit', array(
                'label' => 'Поиск',
                'attr' => array(
                'class' => 'button',
                    'style' => 'background-image:url({{ asset_url }});'
            )
            ));
    }

    public function getName()
    {
        return 'IndexSearch';
    }
}