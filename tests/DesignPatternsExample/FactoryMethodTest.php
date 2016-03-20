<?php

namespace DesignPatternsExample;

use PHPUnit_Framework_TestCase;
use DesignPatternsExample\FactoryMethod\UserFactory;
use DesignPatternsExample\FactoryMethod\AdminFactory;

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    public function testEqual()
    {
        $userFactory = new UserFactory();
        $user = $userFactory->factory('john');

        $adminFactory = new AdminFactory();
        $admin = $adminFactory->factory('john');

        $this->assertEquals('john', $user->getName());
        $this->assertEquals('john', $admin->getName());

        $this->assertEquals(false, $user->canEdit());
        $this->assertEquals(true, $admin->canEdit());
    }
}
