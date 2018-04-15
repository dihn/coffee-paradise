<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 10/03/2018
 * Time: 09:00
 */

namespace App\DataFixtures;


use App\Entity\Coffee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Loads Coffees into the database
 * Class LoadCoffee
 * @package App\DataFixtures
 */
class LoadCoffee extends Fixture
{
    /**
     * Loads the coffees
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $coffee1 = $this->createCoffee('public','Eoghan','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 99.67);

        $coffee2 = $this->createCoffee('public','Eddy','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 85.67);

        $coffee3 = $this->createCoffee('public','Eoghan','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 45.62);

        $coffee4 = $this->createCoffee('public','Eddy','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 20.67);

        $coffee5 = $this->createCoffee('public','Eoghan','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 10.67);

        $coffee6 = $this->createCoffee('private','Eddy','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 5.67);

        $coffee7 = $this->createCoffee('public','Eoghan','Dragonfly Coffee Roasters', 'An exquisitely composed Yemen coffee,
         almost other-worldly in its array of fruit and floral notes, all enveloped in a crisp chocolate.',
            'dragonFly.png', 'Intricately layered, sweetly tart, harmoniously composed.
             Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'ingredient 1, ingredient 2, ingredient 3', 85.67);

        $manager->persist($coffee1);
        $manager->persist($coffee2);
        $manager->persist($coffee3);
        $manager->persist($coffee4);
        $manager->persist($coffee5);
        $manager->persist($coffee6);
        $manager->persist($coffee7);

        $manager->flush();

    }// end load()

    /**
     * Create coffee method
     * @param $status
     * @param $author
     * @param $title
     * @param $summary
     * @param $image
     * @param $description
     * @param $ingredientList
     * @param $price
     * @return Coffee
     */
    private function createCoffee($status, $author, $title, $summary, $image, $description, $ingredientList, $price):Coffee {
        $coffee = new Coffee();
        $coffee->setStatus($status);
        $coffee->setAuthor($author);
        $coffee->setTitle($title);
        $coffee->setSummary($summary);
        $coffee->setImage($image);
        $coffee->setDescription($description);
        $coffee->setIngredientsList($ingredientList);
        $coffee->setPriceRange($price);

        return $coffee;
    }
}// end LoadCoffee()