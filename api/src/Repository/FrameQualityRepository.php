<?php

namespace App\Repository;

use App\Entity\FrameQuality;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FrameQuality|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrameQuality|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrameQuality[]    findAll()
 * @method FrameQuality[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrameQualityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrameQuality::class);
    }

    // /**
    //  * @return FrameQuality[] Returns an array of FrameQuality objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FrameQuality
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
