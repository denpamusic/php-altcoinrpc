<?php

namespace Altcoin\Exceptions;

use Denpa\Bitcoin\Exceptions\Handler as ExceptionHandler;

/**
 * Get exception handler.
 */
$exceptionHandler = exceptionHandler::getInstance();

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
 * If you need to do something more complicated than
 * changing namespace, you can do it in
 * the handler function below.
 * Each thrown exception passes through this handler function.
 */
$exceptionHandler->registerHandler(function ($exception) {
    //
});

/*
 * Return exception handler.
 * Useful when performing unit tests.
 */
return $exceptionHandler;
