<?php

namespace App\Repository;

use App\Entity\MdfeIdeSeg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeSeg|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeSeg|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeSeg[]    findAll()
 * @method MdfeIdeSeg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeSegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeSeg::class);
    }

    // /**
    //  * @return MdfeIdeSeg[] Returns an array of MdfeIdeSeg objects
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
    public function findOneBySomeField($value): ?MdfeIdeSeg
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
