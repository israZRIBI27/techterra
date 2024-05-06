<?php

namespace App\Repository;
use App\Entity\User;
use App\Entity\Panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Panier>
 *
 * @method Panier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panier[]    findAll()
 * @method Panier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
    }

//    /**
//     * @return Panier[] Returns an array of Panier objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Panier
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
// PanierRepository.php

public function calculatePriceStatistics(): array
{
    $qb = $this->createQueryBuilder('p');

    // Count Panier items with price over 100
    $countOver100 = $qb->select('COUNT(p.idPanier)')
        ->where('p.price > :threshold')
        ->setParameter('threshold', 100)
        ->getQuery()
        ->getSingleScalarResult();

    // Count all Panier items with price below or equal to 100
    $countBelow100 = $qb->select('COUNT(p.idPanier)')
        ->where('p.price <= :threshold')
        ->setParameter('threshold', 100)
        ->getQuery()
        ->getSingleScalarResult();

    // Calculate total count of Panier items
    $totalCount = $countOver100 + $countBelow100;

    // Calculate percentage of Panier items over 100 and below or equal to 100
    $percentageOver100 = ($totalCount > 0) ? ($countOver100 / $totalCount) * 100 : 0;
    $percentageBelow100 = 100 - $percentageOver100;

    return [
        'over100' => $percentageOver100,
        'below100' => $percentageBelow100,
    ];
}


public function findByUser(User $user): array
{
    return $this->findBy(['user' => $user]);
}

}
