<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\App\User\Model;

use App\User\Model\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(
            'test',
            'test@example.com'
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }
}
