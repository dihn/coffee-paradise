<?php
/**
 * Review Form
 */

namespace App\Form;

use App\Entity\Review;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Creates the form for reviews
 * Class ReviewType
 * @package App\Form
 */
class ReviewType extends AbstractType
{
    /**
     * Builds the form for reviews
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Status')
            ->add('Author')
            ->add('Coffee', EntityType::class, [
                'class' => 'App:Coffee',
                'choice_label' => 'title',
            ])
        ->add('date')
        ->add('Summary')
        ->add('Retailers')
        ->add('PricePaid')
        ->add('NumStars')
        ;
    }

    /**
     * Configures the options for the reviews form
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
