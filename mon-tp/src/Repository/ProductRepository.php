<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function getLastInserted($entity, $amount)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT e FROM $entity e ORDER BY e.id DESC"
            )
            ->setMaxResults($amount)
            ->getResult();
    }

    // --------------------------------------------------------------------------------



    public function getProductsByCategory(EntityManagerInterface $entityManager, $categoryId)
    {
        $sql = "SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.id = :categoryId;'(";

        $connection = $entityManager->getConnection();
        $statement = $connection->prepare($sql);
        $statement->bindValue('categoryId', $categoryId);
        $statement->execute();

        return $statement->fetchAll(); // Renvoie les résultats sous forme de tableau
    }

    // --------------------------------------------------------------------------------



    public function filter()
    {
        return $this->createQueryBuilder('a')
                    ->orderBy('a.id', 'DESC');
    }

    //    public function findOneBySomeField($value): ?Product
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
