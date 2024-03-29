<?php
/**
 * Coffee Repository
 */

namespace App\Repository;

use App\Entity\Coffee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Repository for coffees
 * @method Coffee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coffee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coffee[]    findAll()
 * @method Coffee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoffeeRepository extends ServiceEntityRepository
{
    /**
     * CoffeeRepository constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Coffee::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
