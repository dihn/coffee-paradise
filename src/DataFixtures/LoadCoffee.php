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
        $coffee1 = $this->createCoffee('public','Eoghan','Dragonfly Coffee Roasters', 'Intricately layered, sweetly tart, harmoniously composed.
         Aromatic orchid, candied ginger, frankincense, Concord grape, roasted cacao nib in aroma and cup.',
            'dragonFly.png', 'This exceptional coffee was selected as the No. 1 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium Roast Beans', 85.00);

        $coffee2 = $this->createCoffee('private','Eddy','Hula Daddy Kona Coffee', 'Spectacularly sweet and hugely aromatic. Meyer lemon marmalade, cedar,
         pistachio, guava, jasmine in aroma and cup.',
            '4f0c4d85fd54794c97ba7b6eb0ab1c0b.jpeg', 'This exceptional coffee was selected as the No. 2 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium-Light Roast Beans', 74.95);

        $coffee3 = $this->createCoffee('public','Tom','JBC Coffee Roasters', 'Intensely rich, complex, vast. Plumeria, chocolate fudge,
         white grapefruit, perique (fermented) pipe tobacco, white truffle in aroma and cup.',
            'coffee.jpg', 'This exceptional coffee was selected as the No. 3 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium-Light Roast Beans', 18.60);

        $coffee4 = $this->createCoffee('private','Sarah','Revel Coffee', 'Delicate, subtle, intricately vibrant. Honey, strawberry guava, lilac, roasted cacao nib, fine musk in aroma and cup.',
            '4f0c4d85fd54794c97ba7b6eb0ab1c0b.jpeg', 'This exceptional coffee was selected as the No. 4 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium-Light Roast Beans', 14.50);

        $coffee5 = $this->createCoffee('public','John','JBC Coffee Roasters', 'Ninety Plus Gesha Estates Limited Batch #227',
            'coffee.jpg', 'This exceptional coffee was selected as the No. 5 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Light Roast Beans', 68.50);

        $coffee6 = $this->createCoffee('private','Eddy','PT\'s Coffee Roasting', 'Intensely sweet, intricate. Dark chocolate, aromatic orchid,
         strawberry guava, almond butter, frankincense in aroma and cup.',
            '4f0c4d85fd54794c97ba7b6eb0ab1c0b.jpeg', 'This exceptional coffee was selected as the No. 6 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium Roast Beans', 35.00);

        $coffee7 = $this->createCoffee('public','Eoghan','Willoughby\'s Coffee & Tea', 'Richly sweet/tart, crisply complex. Dark chocolate,
         roasted cashew, pink grapefruit, sandalwood, Chinese five-spice in aroma and cup.',
            'coffee.jpg', 'This exceptional coffee was selected as the No. 7 coffee on Coffee Review’s list of the Top 30 Coffees of 2017.',
            'Medium-Light Roast Beans', 49.99);

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