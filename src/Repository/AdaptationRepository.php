<?php

namespace App\Repository;

use App\Entity\Adaptation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adaptation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adaptation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adaptation[]    findAll()
 * @method Adaptation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdaptationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adaptation::class);
    }

    // /**
    //  * @return Adaptation[] Returns an array of Adaptation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adaptation
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
