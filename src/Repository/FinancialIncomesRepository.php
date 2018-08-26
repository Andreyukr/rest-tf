<?php

namespace App\Repository;

use App\Entity\FinancialIncomes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FinancialIncomes|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinancialIncomes|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinancialIncomes[]    findAll()
 * @method FinancialIncomes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancialIncomesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FinancialIncomes::class);
    }

//    /**
//     * @return FinancialIncomes[] Returns an array of FinancialIncomes objects
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
    public function findOneBySomeField($value): ?FinancialIncomes
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
