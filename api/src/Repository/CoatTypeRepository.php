<?php

namespace App\Repository;

use App\Entity\CoatType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoatType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoatType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoatType[]    findAll()
 * @method CoatType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoatTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoatType::class);
    }

    // /**
    //  * @return CoatType[] Returns an array of CoatType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoatType
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
