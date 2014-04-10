<?php

namespace spec\PurpleBooth\FaxUploadBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigurationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PurpleBooth\FaxUploadBundle\DependencyInjection\Configuration');
    }

    function it_loads_the_config_of_right_type()
    {
        $this->getConfigTreeBuilder()->shouldReturnAnInstanceOf(
            'Symfony\Component\Config\Definition\Builder\TreeBuilder'
        );
    }

    function it_has_a_root_config_node_of_purple_booth_fax_upload()
    {
        $this->getConfigTreeBuilder()->buildTree()->getName()->shouldReturn('purple_booth_fax_upload');
    }
}
