<?php
/**
 * Coffee Form
 */
namespace App\Form;

use App\Entity\Coffee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Creates the coffee form
 * Class CoffeeType
 * @package App\Form
 */
class CoffeeType extends AbstractType
{
    /**
     * Builds the coffee form
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status')
            ->add('title')
            ->add('author')
            ->add('summary')
            ->add('image', FileType::class, [
                'label'=>'Coffee',
                'data_class' => null,
                'required' => false
            ])
            ->add('description')
            ->add('ingredientsList')
            ->add('priceRange')
            ->add('status', ChoiceType::class, array(
                'choices' => array(
                    'public' => 'public',
                    'private' => 'private'
                )
            ))
            ;
    }

    /**
     * Configures options for coffee form
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coffee::class,
        ]);
    }
}