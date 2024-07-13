<?php

namespace App\Repository;

use App\Entity\Project1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Project1>
 *
 * @method Project1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project1[]    findAll()
 * @method Project1[]     indBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Project1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project1::class);
    }

//    /**
//     * @return Project1[] Returns an array of Project1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Project1
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
