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
        $fake = new FakeClient();
        $defaults = $fake->getDefaultConfig();

        $this->assertEquals($fake->getConfig('scheme'), $defaults['scheme']);
        $this->assertEquals($fake->getConfig('host'), $defaults['host']);
        $this->assertEquals($fake->getConfig('port'), $defaults['port']);
        $this->assertEquals($fake->getConfig('user'), $defaults['user']);
        $this->assertEquals($fake->getConfig('password'), $defaults['password']);
        $this->assertEquals($fake->getConfig('preserve_case'), $defaults['preserve_case']);
    }
}

/*
 * Mock client class to test protected methods.
 */
class FakeClient extends Client
{
    public function getDefaultConfig() : array
    {
        return parent::getDefaultConfig();
    }

    public function getResponseHandler() : string
    {
        return parent::getResponseHandler();
    }
}
