<?php

namespace App\Repository;

use App\Entity\LandingPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LandingPage>
 */
class LandingPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LandingPage::class);
    }
    public function findOneByPartnerAndSlug(string $partnerSlug, string $landingSlug): ?\App\Entity\LandingPage
    {
        return $this->createQueryBuilder('lp')
            ->innerJoin('lp.partner', 'p')
            ->addSelect('p')
            ->leftJoin('lp.landingTemplate', 'lt')
            ->addSelect('lt')
            ->leftJoin('lp.sections', 's')
            ->addSelect('s')
            ->andWhere('p.slug = :partnerSlug')
            ->andWhere('lp.slug = :landingSlug')
            ->andWhere('lp.isActive = true')
            ->setParameter('partnerSlug', $partnerSlug)
            ->setParameter('landingSlug', $landingSlug)
            ->orderBy('s.sortOrder', 'ASC')
            ->getQuery()
            ->getOneOrNullResult();
    }
//    /**
//     * @return LandingPage[] Returns an array of LandingPage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LandingPage
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
