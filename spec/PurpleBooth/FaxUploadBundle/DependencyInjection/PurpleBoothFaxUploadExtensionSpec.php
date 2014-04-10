<?php

namespace spec\PurpleBooth\FaxUploadBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PurpleBoothFaxUploadExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PurpleBooth\FaxUploadBundle\DependencyInjection\PurpleBoothFaxUploadExtension');
    }

    function it_loads_config_for_bundle(ContainerBuilder $container)
    {
        $this->load(array(), $container);
    }
}
