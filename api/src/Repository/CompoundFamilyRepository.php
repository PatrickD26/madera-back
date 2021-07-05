<?php

namespace App\Repository;

use App\Entity\CompoundFamily;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompoundFamily|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompoundFamily|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompoundFamily[]    findAll()
 * @method CompoundFamily[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompoundFamilyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompoundFamily::class);
    }

    // /**
    //  * @return CompoundFamily[] Returns an array of CompoundFamily objects
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
    public function findOneBySomeField($value): ?CompoundFamily
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
