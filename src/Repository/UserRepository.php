<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function getRanking()
    {
        return $this->createQueryBuilder('u')
            ->select('u.id, u.pseudo,u.count_victory,u.last_login')
            ->orderBy('u.count_victory', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /*public function getRanking() {
        $conn = $this->getDoctrine()->getManager()->getConnection();

        //On demande tous les utilisateurs classés par nombre de victoires
        $sql = '
            SELECT id,pseudo,count_victory,last_login FROM user u
            ORDER BY u.count_victory DESC
            ';
        $stmt = $conn->query($sql);

        //On mets le classement dans un tableau
        $ranking = $stmt->fetchAll();

        return $ranking;
    }*/

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
