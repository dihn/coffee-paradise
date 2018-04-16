<?php
/**
 * Review entity.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * The Review Entity.
 *
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $status;


    /**
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $summary;

    /**
     * @ORM\Column(type="string")
     */
    private $retailers;

    /**
     * @ORM\Column(type="float")
     */
    private $pricePaid;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getRetailers()
    {
        return $this->retailers;
    }

    /**
     * @param mixed $retailers
     */
    public function setRetailers($retailers): void
    {
        $this->retailers = $retailers;
    }

    /**
     * @return mixed
     */
    public function getPricePaid()
    {
        return $this->pricePaid;
    }

    /**
     * @param mixed $pricePaid
     */
    public function setPricePaid($pricePaid): void
    {
        $this->pricePaid = $pricePaid;
    }

    /**
     * @return mixed
     */
    public function getNumStars()
    {
        return $this->numStars;
    }

    /**
     * @param mixed $numStars
     */
    public function setNumStars($numStars): void
    {
        $this->numStars = $numStars;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @ORM\Column(type="float")
     */
    private $numStars;

    /**
     * Sets up review relationship with coffees. onDelete is used to allow deletion avoiding foreign key errors
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Coffee", inversedBy="reviews")
     * @ORM\JoinColumn(nullable=true, onDelete="cascade")
     */
    private $coffee;

    public function getCoffee(): ?Coffee {
        return $this->coffee;
    }

    /**
     * @param Coffee|null $coffee
     */
    public function setCoffee(Coffee $coffee = null) {
        $this->coffee = $coffee;
    }


    public function __toString()
    {
        return $this->author . ': ' . $this->getSummary();
    }


}
