<?php

namespace DesignPatternsExample;

use PHPUnit_Framework_TestCase;
use DesignPatternsExample\Singleton\Configuration;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testEqual()
    {
        $config1 = Configuration::instance();
        $config2 = Configuration::instance();

        $this->assertEquals($config1, $config2);

        $config1->setProperty('title', 'Singleton');

        $this->assertEquals($config1->getProperty('title'), $config2->getProperty('title'));
    }
}
