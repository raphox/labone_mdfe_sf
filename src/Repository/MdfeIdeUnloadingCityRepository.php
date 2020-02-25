<?php

namespace App\Repository;

use App\Entity\MdfeIdeUnloadingCity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeUnloadingCity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeUnloadingCity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeUnloadingCity[]    findAll()
 * @method MdfeIdeUnloadingCity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeUnloadingCityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeUnloadingCity::class);
    }

    // /**
    //  * @return MdfeIdeUnloadingCity[] Returns an array of MdfeIdeUnloadingCity objects
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
    public function findOneBySomeField($value): ?MdfeIdeUnloadingCity
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
