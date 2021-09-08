<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\User\Model;

class User
{
    protected string $id;
    protected string $username;
    protected string $email;
    protected string $password;
    protected string $plainPassword;
}
