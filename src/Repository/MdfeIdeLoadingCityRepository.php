<?php

namespace App\Repository;

use App\Entity\MdfeIdeLoadingCity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeLoadingCity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeLoadingCity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeLoadingCity[]    findAll()
 * @method MdfeIdeLoadingCity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeLoadingCityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeLoadingCity::class);
    }

    // /**
    //  * @return MdfeIdeLoadingCity[] Returns an array of MdfeIdeLoadingCity objects
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
    public function findOneBySomeField($value): ?MdfeIdeLoadingCity
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
