<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 06/03/2018
 * Time: 01:48
 */

namespace App\Repository;


use App\Entity\Member;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class MemberRepository
 * @package App\Repository
 */
class MemberRepository extends ServiceEntityRepository
{
    /**
     * MemberRepository constructor.
     * @param RegistryInterface $registry
     */
   public function __construct(RegistryInterface $registry)
   {
       parent::__construct($registry, Member::class);
   }
}