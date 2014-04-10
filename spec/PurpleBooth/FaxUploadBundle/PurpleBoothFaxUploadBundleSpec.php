<?php

namespace spec\PurpleBooth\FaxUploadBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PurpleBoothFaxUploadBundleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PurpleBooth\FaxUploadBundle\PurpleBoothFaxUploadBundle');
    }
}
