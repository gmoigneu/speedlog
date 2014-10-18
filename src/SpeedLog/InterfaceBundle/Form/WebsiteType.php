<?php

namespace SpeedLog\InterfaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class WebsiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
            $reseller = $event->getData();
            $form = $event->getForm();

            $form->add('name')
            ->add('url')
            ->add('pages', 'collection', [
                        'type' => new PageType(),
                        'allow_add' => true,
                        'allow_delete' => true,
                        'by_reference' => false,
                    ]);
        });
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SpeedLog\CoreBundle\Document\Website'
        ));
    }

    public function getName()
    {
        return 'speedlog_interfacebundle_websitetype';
    }
}
