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

    public function __construct(
        string $username,
        string $email,
        string $plainPassword
    )
    {
        $this->username = $username;
        $this->email = $email;
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }
}
