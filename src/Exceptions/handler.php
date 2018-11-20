<?php

declare(strict_types=1);

namespace Altcoin\Exceptions;

use Denpa\Bitcoin\Exceptions\Handler as ExceptionHandler;
use Throwable;

/**
 * Get exception handler instance.
 */
$exceptionHandler = ExceptionHandler::getInstance();

/*
 * Set namespace for exceptions.
 *
 * This will make sure, that all exceptions
 * that extend 'Denpa\Bitcoin\Exceptions\ClientException'
 * class will be trown with specified namespace.
 *
 * e. g. Denpa\Bitcoin\Exceptions\BadConfigurationException
 * will become Altcoin\Exceptions\BadConfigurationException
 */
$exceptionHandler->setNamespace('Altcoin\\Exceptions');

/*
 * Register exception handler function.
 *
 * If your project requeres anything more complicated than
 * changing namespace, you can do using
 * handler function below.
 *
 * When exception is thrown, it'll be passed through
 * this handler function, which allows you to
 * modify exception or throw different one.
 */
$exceptionHandler->registerHandler(function (Throwable $exception) {
    //
});

/*
 * Return exception handler.
 * Useful when performing unit tests.
 */
return $exceptionHandler;
