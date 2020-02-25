<?php

namespace App\Repository;

use App\Entity\MdfeIdeUnloadingCityDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MdfeIdeUnloadingCityDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdfeIdeUnloadingCityDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdfeIdeUnloadingCityDocument[]    findAll()
 * @method MdfeIdeUnloadingCityDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdfeIdeUnloadingCityDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdfeIdeUnloadingCityDocument::class);
    }

    // /**
    //  * @return MdfeIdeUnloadingCityDocument[] Returns an array of MdfeIdeUnloadingCityDocument objects
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
    public function findOneBySomeField($value): ?MdfeIdeUnloadingCityDocument
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
