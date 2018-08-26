<?php

namespace App\Repository;

use App\Entity\FinancialDebts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FinancialDebts|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinancialDebts|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinancialDebts[]    findAll()
 * @method FinancialDebts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancialDebtsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FinancialDebts::class);
    }

//    /**
//     * @return FinancialDebts[] Returns an array of FinancialDebts objects
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
    public function findOneBySomeField($value): ?FinancialDebts
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
