<?php

namespace App\Repository;

use App\Entity\MdfeIdeVeicReboque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeVeicReboque|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeVeicReboque|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeVeicReboque[]    findAll()
 * @method MdfeIdeVeicReboque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeVeicReboqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeVeicReboque::class);
    }

    // /**
    //  * @return MdfeIdeVeicReboque[] Returns an array of MdfeIdeVeicReboque objects
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
    public function findOneBySomeField($value): ?MdfeIdeVeicReboque
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
