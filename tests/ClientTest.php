<?php

namespace Altcoin\Tests;

use Altcoin\Client;
use Altcoin\Response;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * Test response handler class getter.
     *
     * @return void
     */
    public function testGetResponseHandler()
    {
        $fake = new FakeClient();

        $this->assertEquals(Response::class, $fake->getResponseHandler());
    }

    /**
     * Test default config getter.
     *
     * @return void
     */
    public function testDefaultConfig()
    {
        $client = new FakeClient();
        $config = $client->getConfig();
        $defaults = $client->getDefaultConfig();

        $uri = $client->getConfig('base_uri');
        $this->assertEquals($uri->getScheme(), $defaults['scheme']);
        $this->assertEquals($uri->getHost(), $defaults['host']);
        $this->assertEquals($uri->getPort(), $defaults['port']);

        $auth = $client->getConfig('auth');
        $this->assertEquals($auth[0], $defaults['user']);
        $this->assertEquals($auth[1], $defaults['password']);
    }

    public function testExceptionHandler()
    {
        $exceptionHandler = include './src/Exceptions/handler.php';
        $this->assertInstanceOf(\Denpa\Bitcoin\Exceptions\Handler::class, $exceptionHandler);
    }
}

class FakeClient extends Client
{
    public function getResponseHandler()
    {
        return parent::getResponseHandler();
    }

    public function getDefaultConfig()
    {
        return parent::getDefaultConfig();
    }
}
