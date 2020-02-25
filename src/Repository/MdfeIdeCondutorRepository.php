<?php

namespace App\Repository;

use App\Entity\MdfeIdeCondutor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeCondutor|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeCondutor|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeCondutor[]    findAll()
 * @method MdfeIdeCondutor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeCondutorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeCondutor::class);
    }

    // /**
    //  * @return MdfeIdeCondutor[] Returns an array of MdfeIdeCondutor objects
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
    public function findOneBySomeField($value): ?MdfeIdeCondutor
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
