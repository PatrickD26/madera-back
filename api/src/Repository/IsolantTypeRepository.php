<?php

namespace App\Repository;

use App\Entity\IsolantType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IsolantType|null find($id, $lockMode = null, $lockVersion = null)
 * @method IsolantType|null findOneBy(array $criteria, array $orderBy = null)
 * @method IsolantType[]    findAll()
 * @method IsolantType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IsolantTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IsolantType::class);
    }

    // /**
    //  * @return IsolantType[] Returns an array of IsolantType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IsolantType
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
