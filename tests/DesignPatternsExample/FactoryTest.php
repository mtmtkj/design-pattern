<?php

namespace DesignPatternsExample;

use PHPUnit_Framework_TestCase;
use DesignPatternsExample\Factory\MessageFactory;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $factory = new MessageFactory();
        $info = $factory->factory(MessageFactory::INFO);

        $this->assertNotNull($info);
        $this->assertNotEmpty($info->say('message'));

        $error = $factory->factory(MessageFactory::ERROR);

        $this->assertNotNull($error);
        $this->assertNotEmpty($error->say('message'));
        $this->assertNotEquals($info->say('message'), $error->say('message'));
    }
}
