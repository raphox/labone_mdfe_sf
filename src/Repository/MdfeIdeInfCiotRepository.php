<?php

namespace App\Repository;

use App\Entity\MdfeIdeInfCiot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeInfCiot|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeInfCiot|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeInfCiot[]    findAll()
 * @method MdfeIdeInfCiot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeInfCiotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeInfCiot::class);
    }

    // /**
    //  * @return MdfeIdeInfCiot[] Returns an array of MdfeIdeInfCiot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MdfeIdeInfCiot
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
