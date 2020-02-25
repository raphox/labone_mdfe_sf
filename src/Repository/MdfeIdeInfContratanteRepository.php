<?php

namespace App\Repository;

use App\Entity\MdfeIdeInfContratante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeInfContratante|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeInfContratante|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeInfContratante[]    findAll()
 * @method MdfeIdeInfContratante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeInfContratanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeInfContratante::class);
    }

    // /**
    //  * @return MdfeIdeInfContratante[] Returns an array of MdfeIdeInfContratante objects
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
    public function findOneBySomeField($value): ?MdfeIdeInfContratante
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
