<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\App\Behat;

use App\User\Model\User;
use Behat\Behat\Context\Context;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;

class UserContext implements Context
{
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->manager = $registry->getManagerForClass(User::class);
    }

    /**
     * @Given I don't have user with username :username
     */
    public function iDonTHaveUser(string $username)
    {
        $manager    = $this->manager;
        $repository = $manager->getRepository(User::class);
        $user       = $repository->findOneBy([
            'username' => $username,
        ]);

        if (null !== $user) {
            $manager->remove($user);
            $manager->flush();
        }
    }
}
