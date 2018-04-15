<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Coffee entity
 * @ORM\Entity(repositoryClass="App\Repository\CoffeeRepository")
 */
class Coffee
{

    /**
     * Stores the coffee id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Stores the status of the coffee
     * @ORM\Column(type="string")
     */
    private $status;

    /**
     * Stores the author of the coffee
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * Stores the title of the coffee
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * Stores the summary of the coffee
     * @ORM\Column(type="string")
     */
    private $summary;

    /**
     * Stores the image of the coffee
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please upload a coffee image")
     * @Assert\File(maxSize="10M",
     *     mimeTypes={
     *     "image/png",
     *     "image/jpeg",
     *     "image/jpg",
     *     "image/gif"
     *      })
     */
    private $image;

    /**
     * Stores the description of the coffee
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * Stores the indgredients list of the coffee
     * @ORM\Column(type="string")
     */
    private $ingredientsList;

    /**
     * Stores the price of the coffee
     * @ORM\Column(type="float")
     */
    private $priceRange;


    /**
     * Get the id of coffee
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the id of coffee
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * Get the status of coffee
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status of coffee
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * Get the author of coffee
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the author of coffee
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * Get the title of coffee
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title of coffee
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * Get the summary of coffee
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the summary of coffee
     * @param mixed $summary
     */
    public function setSummary($summary): void
    {
        $this->summary = $summary;
    }

    /**
     * Get the coffee image
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the coffee image
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * Get the description of coffee
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description of coffee
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * Get the ingredients list
     * @return mixed
     */
    public function getIngredientsList()
    {
        return $this->ingredientsList;
    }

    /**
     * Set the ingredients list
     * @param mixed $ingredientsList
     */
    public function setIngredientsList($ingredientsList): void
    {
        $this->ingredientsList = $ingredientsList;
    }

    /**
     * Get the price of coffee
     * @return mixed
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Set the price of coffee
     * @param mixed $priceRange
     */
    public function setPriceRange($priceRange): void
    {
        $this->priceRange = $priceRange;
    }

    /**
     * Create reviews relationship
     * @ORM\OneToMany(targetEntity="App\Entity\Review", mappedBy="coffee")
     *
     */
    private $reviews;

    /**
     * Coffee constructor.
     */
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    /**
     * Get the reviews of this coffee
     * @return ArrayCollection
     */
    public function getReviews() {
        return $this->reviews;
    }

    /**
     * Set the reviews of this coffee
     * @param $reviews
     */
    public function setReviews($reviews): void {
        $this->reviews = $reviews;
    }



}
