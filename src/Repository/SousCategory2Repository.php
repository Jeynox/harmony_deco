<?php

namespace App\Repository;

use App\Entity\SousCategory2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SousCategory2>
 *
 * @method SousCategory2|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousCategory2|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousCategory2[]    findAll()
 * @method SousCategory2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousCategory2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SousCategory2::class);
    }

//    /**
//     * @return SousCategory2[] Returns an array of SousCategory2 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SousCategory2
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
