<?php

namespace spec\PurpleBooth\FaxUploadBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefaultControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PurpleBooth\FaxUploadBundle\Controller\DefaultController');
    }

    function it_returns_an_index()
    {
        $name = "Dave";

        $this->indexAction($name)->shouldReturn(array('name' => $name));
    }
}
