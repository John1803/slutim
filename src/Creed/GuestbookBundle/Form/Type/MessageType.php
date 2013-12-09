<?php

namespace Creed\GuestbookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('theme', 'text')
            ->add('user', 'text')
            ->add('email', 'email')
            ->add('createdAt', 'datetime')
            ->add('text', 'text')
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'message';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Creed\GuestbookBundle\Entity\Message'
        ));
    }
} 