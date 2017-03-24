<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class suppliers_bankType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('suppliersId')->add('suppliersBankName')->add('suppliersAccNo')->add('suppliersIBAN')->add('suppliersBIC')->add('suppliersCountry')->add('suppliersBankAddress')->add('uppliersSwift')->add('suppliersRoutingCod');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\suppliers_bank'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_suppliers_bank';
    }


}
