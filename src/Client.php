<?php

namespace Altcoin;

use Denpa\Bitcoin;

/**
 * Altcoin client class.
 *
 * Client class provides default configuration
 * and response handler class name.
 */
class Client extends Bitcoin\Client
{
    /**
     * Gets default configuration.
     *
     * Those are default values that will be used
     * if the user doesn't supply value for parameter.
     *
     * @return array
     */
    protected function getDefaultConfig()
    {
        return [
            'scheme'        => 'http',
            'host'          => '127.0.0.1',
            'port'          => 8332,
            'user'          => '',
            'password'      => '',
            'preserve_case' => '',
            'ca'            => null,
        ];
    }

    /**
     * Gets response handler class name.
     *
     * This function should return full class path
     * including namespace.
     *
     * @return string
     */
    protected function getResponseHandler()
    {
        return 'Altcoin\\Response';
    }
}
