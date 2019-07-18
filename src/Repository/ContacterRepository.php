<?php

namespace App\Repository;

use App\Entity\Contacter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contacter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contacter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contacter[]    findAll()
 * @method Contacter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContacterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contacter::class);
    }

    // /**
    //  * @return Contacter[] Returns an array of Contacter objects
    //  */
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
    public function findOneBySomeField($value): ?Contacter
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
