<?php

namespace DesignPatternsExample\Factory;

class InfoMessage implements Message
{
    protected $type = 'info';

    public function say($message)
    {
        return "[{$this->type}] $message";
    }
}
