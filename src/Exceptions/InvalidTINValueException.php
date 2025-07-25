<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Exceptions;

use MiBo\Taxonomy\Contracts\TinValidationExceptionInterface;
use RuntimeException;

/**
 * Class InvalidTINValueException
 *
 * @package MiBo\Taxonomy\Exceptions
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.2
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
final class InvalidTINValueException extends RuntimeException implements TinValidationExceptionInterface
{
}
