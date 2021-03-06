<?php

namespace spec\Packagist\Api\Result\Package;

use PHPSpec2\ObjectBehavior;

class Maintainer extends ObjectBehavior
{
    function let()
    {
        $this->fromArray(array(
            'name'     => 'Saša Stamenković',
            'email'    => 'umpirsky@gmail.com',
            'homepage' => 'umpirsky.com'
        ));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Packagist\Api\Result\Package\Maintainer');
    }

    function it_gets_name()
    {
        $this->getName()->shouldReturn('Saša Stamenković');
    }

    function it_gets_email()
    {
        $this->getEmail()->shouldReturn('umpirsky@gmail.com');
    }

    function it_gets_homepage()
    {
        $this->getHomepage()->shouldReturn('umpirsky.com');
    }

}
