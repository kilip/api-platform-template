<?php

namespace spec\App\Application;

use App\Application\ApplicationModule;
use PhpSpec\ObjectBehavior;

class ApplicationModuleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ApplicationModule::class);
    }
}
