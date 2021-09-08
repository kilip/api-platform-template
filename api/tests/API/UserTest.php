<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\App\API;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RecreateDatabaseTrait;

class UserTest extends ApiTestCase
{
    use RecreateDatabaseTrait;

    public function test_get_user()
    {
        $client   = static::createClient();
        $client->request('GET', '/users', []);
        $this->assertResponseIsSuccessful();
    }
}
