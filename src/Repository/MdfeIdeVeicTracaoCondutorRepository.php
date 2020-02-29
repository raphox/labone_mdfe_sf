<?php

namespace App\Repository;

use App\Entity\MdfeIdeVeicTracaoCondutor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeVeicTracaoCondutor|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeVeicTracaoCondutor|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeVeicTracaoCondutor[]    findAll()
 * @method MdfeIdeVeicTracaoCondutor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeVeicTracaoCondutorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeVeicTracaoCondutor::class);
    }

    // /**
    //  * @return MdfeIdeVeicTracaoCondutor[] Returns an array of MdfeIdeVeicTracaoCondutor objects
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
    public function findOneBySomeField($value): ?MdfeIdeVeicTracaoCondutor
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
