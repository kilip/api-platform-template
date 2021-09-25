<?php

namespace App\User\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use App\User\Model\User;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserItemDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private ObjectManager $manager;
    private TokenStorageInterface $tokenStorage;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        ManagerRegistry $registry
    ) {
        $manager = $registry->getManagerForClass(User::class);

        $this->manager      = $manager;
        $this->tokenStorage = $tokenStorage;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return User::class === $resourceClass && 'get' === $operationName;
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-param class-string<T> $resourceClass
     * @template T
     * @psalm-suppress MissingParamType
     * @psalm-suppress MoreSpecificReturnType
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $repository   = $this->manager->getRepository($resourceClass);
        $tokenStorage = $this->tokenStorage;

        if ('profile' === $id) {
            $token = $tokenStorage->getToken();
            if (null === $token) {
                return null;
            }

            $user = $token->getUser();
            if ($user instanceof User) {
                return $user;
            }
        }

        return $repository->find($id);
    }
}
