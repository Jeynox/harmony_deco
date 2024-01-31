<?php

namespace App\Repository;

use App\Entity\Inspirations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Inspirations>
 *
 * @method Inspirations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inspirations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inspirations[]    findAll()
 * @method Inspirations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InspirationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inspirations::class);
    }

//    /**
//     * @return Inspirations[] Returns an array of Inspirations objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Inspirations
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
