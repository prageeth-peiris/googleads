<?php

namespace JoelButcher\GoogleAds\Concerns;

use JoelButcher\GoogleAds\ConfigException;

trait ThrowsConfigException
{
    /**
     * Throws a config exception for the given message.
     *
     * @param  string  $message
     * @return void
     *
     * @throws ConfigException
     */
    protected static function throwNewConfigException(string $message): void
    {
        throw new ConfigException($message);
    }
}
