<?php

namespace App\Repository;

use App\Entity\FinancialExpences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FinancialExpences|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinancialExpences|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinancialExpences[]    findAll()
 * @method FinancialExpences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancialExpencesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FinancialExpences::class);
    }

//    /**
//     * @return FinancialExpences[] Returns an array of FinancialExpences objects
//     */
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
    public function findOneBySomeField($value): ?FinancialExpences
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
