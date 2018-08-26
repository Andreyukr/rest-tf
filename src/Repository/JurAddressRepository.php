<?php

namespace App\Repository;

use App\Entity\JurAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method JurAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method JurAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method JurAddress[]    findAll()
 * @method JurAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JurAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, JurAddress::class);
    }

//    /**
//     * @return JurAddress[] Returns an array of JurAddress objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JurAddress
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
