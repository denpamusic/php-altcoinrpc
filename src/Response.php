<?php

namespace Altcoin;

use Denpa\Bitcoin\Traits\Collection;
use Denpa\Bitcoin\Traits\ReadOnlyArray;
use Denpa\Bitcoin\Traits\SerializableContainer;
use Denpa\Bitcoin\Responses\Response as BitcoinResponse;

/**
 * Altcoin response handler class.
 *
 * Instance of this class is returned as result
 * of successfull remote call.
 * By default, this class uses all available response
 * traits, however you can customize it to your needs.
 *
 * Traits:
 * - Collection - provides helper functions like get(), has(), count(), ..., etc
 * - ReadOnlyArray - implements ability to use response as regular
 *   php array, e. g. $response['tx']
 *   Note: When using this trait, class should implement ArrayAccess interface.
 * - SerializableContainer - provides a way to serialize response via
 *   serialize() and json_encode() functions.
 *   Note: When using this trait class should implement Serializable and
 *         JsonSerializable interfaces.
 */
class Response extends BitcoinResponse implements
    \ArrayAccess,
    \Countable,
    \Serializable,
    \JsonSerializable
{
    use Collection, ReadOnlyArray, SerializableContainer;
}
