<?php
/**
 * Member Form
 */
namespace App\Form;

use App\Entity\Member;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Creates Member form
 * Class MemberType
 * @package App\Form
 */
class MemberType extends AbstractType
{
    /**
     * Builds the member form
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
        ->add('password')
        ->add( 'roles',
            ChoiceType::class, [
                'choices'=>[
                    'ROLE_USER'=>'ROLE_USER',
                    'ROLE_MEMBER'=>'ROLE_MEMBER',
                    'ROLE_ADMIN'=>'ROLE_ADMIN'
                ],
                'expanded'=>true,
                'multiple'=>true,
            ])
        ;
    }

    /**
     * Configures the options for the member form
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Member::class,
        ]);
    }
}