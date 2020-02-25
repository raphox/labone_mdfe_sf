<?php

namespace App\Repository;

use App\Entity\MdfeIdeDisp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeDisp|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeDisp|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeDisp[]    findAll()
 * @method MdfeIdeDisp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeDispRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeDisp::class);
    }

    // /**
    //  * @return MdfeIdeDisp[] Returns an array of MdfeIdeDisp objects
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
    public function findOneBySomeField($value): ?MdfeIdeDisp
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
