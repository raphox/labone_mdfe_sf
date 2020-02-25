<?php

namespace App\Repository;

use App\Entity\MdfeIdeVeicTracao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeVeicTracao|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeVeicTracao|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeVeicTracao[]    findAll()
 * @method MdfeIdeVeicTracao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeVeicTracaoeicTracaoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeVeicTracao::class);
    }

    // /**
    //  * @return MdfeIdeVeicTracao[] Returns an array of MdfeIdeVeicTracao objects
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
    public function findOneBySomeField($value): ?MdfeIdeVeicTracao
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
