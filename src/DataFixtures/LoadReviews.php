<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 06/04/2018
 * Time: 18:55
 */

namespace App\DataFixtures;

use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class LoadReviews
 * @package App\DataFixtures
 */
class LoadReviews extends Fixture
{

    /**
     * Loads the reviews
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $review1 = new Review();
        $review1->setId(1);
        $review1->setStatus('public');
        $review1->setAuthor('Eoghan');
        $review1->setDate(new \DateTime('2017-01-01'));
        $review1->setSummary('Summary goes here');
        $review1->setRetailers('Retailer 01');
        $review1->setPricePaid(9.99);
        $review1->setNumStars(3);
        $review1->setCoffee();

        $review2 = new Review();
        $review2->setId(1);
        $review2->setStatus('public');
        $review2->setAuthor('Tim');
        $review2->setDate(new \DateTime('2017-05-14'));
        $review2->setSummary('Summary goes here for Tim');
        $review2->setRetailers('Retailer Tim');
        $review2->setPricePaid(68.99);
        $review2->setNumStars(4.6);
        $review2->setCoffee();


        $manager->persist($review1);
        $manager->persist($review2);



        $manager->flush();
    }

    /**
     * Method to create reviews
     * @param $status
     * @param $memberid
     * @param $author
     * @param $numStars
     * @param $pricePaid
     * @param $summary
     * @param $retailers
     * @param $date
     * @return Review
     */
    private function createReview($status, $memberid, $author, $numStars, $pricePaid, $summary, $retailers, $date):Review {
        $review = new Review();
        $review->setStatus($status);

        $review->setAuthor($author);
        $review->setNumStars($numStars);
        $review->setPricePaid($pricePaid);
        $review->setSummary($summary);
        $review->setRetailers($retailers);
        $review->setDate($date);

        return $review;
    }
}