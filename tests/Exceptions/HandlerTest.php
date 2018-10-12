<?php

namespace Altcoin\Tests\Exceptions;

use Altcoin\Exceptions\BadConfigurationException;
use Denpa\Bitcoin\Exceptions as BitcoinExceptions;
use Denpa\Bitcoin\Exceptions\Handler as ExceptionHandler;
use PHPUnit\Framework\TestCase;

class HandlerTest extends TestCase
{
    /**
     * Test exception handler.
     *
     * @return void
     */
    public function testExceptionHandler()
    {
        $exceptionHandler = include './src/Exceptions/handler.php';
        $this->assertInstanceOf(ExceptionHandler::class, $exceptionHandler);
    }

    public function testSetNamespace()
    {
        $exception = new BitcoinExceptions\BadConfigurationException(['foo' => 'bar']);
        $this->expectException(BadConfigurationException::class);

        ExceptionHandler::getInstance()->handle($exception);
    }
}
