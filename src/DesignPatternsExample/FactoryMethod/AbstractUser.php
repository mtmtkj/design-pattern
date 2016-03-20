<?php

namespace DesignPatternsExample\FactoryMethod;

abstract class AbstractUser
{
    const PRIVILEGE_VIEW = 1;
    const PRIVILEGE_ALL = 9;

    protected $name;
    protected $privilege = self::PRIVILEGE_VIEW;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function canEdit()
    {
        return ($this->privilege > self::PRIVILEGE_VIEW);
    }
}
