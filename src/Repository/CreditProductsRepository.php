<?php

namespace App\Repository;

use App\Entity\CreditProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CreditProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreditProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreditProducts[]    findAll()
 * @method CreditProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditProductsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CreditProducts::class);
    }

//    /**
//     * @return CreditProducts[] Returns an array of CreditProducts objects
//     */
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
    public function findOneBySomeField($value): ?CreditProducts
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
