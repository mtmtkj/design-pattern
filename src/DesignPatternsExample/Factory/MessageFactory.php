<?php

namespace DesignPatternsExample\Factory;

use DesignPatternsExample\Factory\InfoMessage;
use DesignPatternsExample\Factory\AnotherMessage;

class MessageFactory
{
    const INFO = 1;
    const WARN = 2;
    const ERROR = 3;

    public function factory($pattern = self::INFO)
    {
        if ($pattern === self::INFO) {
            return new InfoMessage();
        } elseif ($pattern === self::ERROR) {
            return new ErrorMessage();
        } else {
            throw new Exception('invalid pattern');
        }
    }
}
