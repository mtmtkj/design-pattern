<?php

namespace DesignPatternsExample\FactoryMethod;

class Admin extends AbstractUser
{
    protected $privilege = AbstractUser::PRIVILEGE_ALL;
}
