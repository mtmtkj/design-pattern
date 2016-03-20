<?php

namespace DesignPatternsExample\FactoryMethod;

class UserFactory implements UserFactoryInterface
{
    public function factory($name)
    {
        return new User($name);
    }
}
