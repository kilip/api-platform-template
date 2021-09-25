<?php

namespace spec\App\Application\Menu;

use App\Application\Menu\MenuItem;
use PhpSpec\ObjectBehavior;

class MenuItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MenuItem::class);
    }
}
