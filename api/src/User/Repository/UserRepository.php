<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\User\Repository;

use App\User\Model\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

class UserRepository extends ServiceEntityRepository implements UserLoaderInterface
{
    /**
     * @throws NonUniqueResultException
     * @psalm-suppress MixedReturnStatement
     * @psalm-suppress MixedInferredReturnType
     */
    public function loadUserByUsername(string $username): ?User
    {
        $query = <<<EOC
SELECT u
FROM App\User\Model\User u
WHERE u.username = :username
EOC;

        $em = $this->getEntityManager();
        $q  = $em->createQuery($query);
        $q->setParameter('username', $username);

        return $q->getOneOrNullResult();
    }
}
