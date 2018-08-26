<?php

namespace App\Repository;

use App\Entity\FinancialProperty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FinancialProperty|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinancialProperty|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinancialProperty[]    findAll()
 * @method FinancialProperty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancialPropertyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FinancialProperty::class);
    }

//    /**
//     * @return FinancialProperty[] Returns an array of FinancialProperty objects
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
    public function findOneBySomeField($value): ?FinancialProperty
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
