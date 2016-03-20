<?php

namespace DesignPatternsExample\FactoryMethod;

class AdminFactory implements UserFactoryInterface
{
    public function factory($name)
    {
        return new Admin($name);
    }
}
