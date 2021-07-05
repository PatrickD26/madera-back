<?php

namespace App\Repository;

use App\Entity\ExternalFinish;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExternalFinish|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExternalFinish|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExternalFinish[]    findAll()
 * @method ExternalFinish[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExternalFinishRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExternalFinish::class);
    }

    // /**
    //  * @return ExternalFinish[] Returns an array of ExternalFinish objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExternalFinish
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
