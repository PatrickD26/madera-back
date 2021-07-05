<?php

namespace App\Repository;

use App\Entity\Blueprint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blueprint|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blueprint|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blueprint[]    findAll()
 * @method Blueprint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlueprintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blueprint::class);
    }

    // /**
    //  * @return Blueprint[] Returns an array of Blueprint objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blueprint
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
