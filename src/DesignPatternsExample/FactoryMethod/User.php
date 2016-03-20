<?php

namespace DesignPatternsExample\FactoryMethod;

class User extends AbstractUser
{
    protected $privilege = AbstractUser::PRIVILEGE_VIEW;
}
