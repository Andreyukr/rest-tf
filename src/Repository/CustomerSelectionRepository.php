<?php

namespace App\Repository;

use App\Entity\CustomerSelection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomerSelection|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerSelection|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerSelection[]    findAll()
 * @method CustomerSelection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerSelectionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomerSelection::class);
    }

//    /**
//     * @return CustomerSelection[] Returns an array of CustomerSelection objects
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
    public function findOneBySomeField($value): ?CustomerSelection
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
