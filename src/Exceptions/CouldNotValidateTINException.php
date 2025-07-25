<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Exceptions;

use MiBo\Taxonomy\Contracts\TinValidationExceptionInterface;
use RuntimeException;

/**
 * Class CouldNotValidateTINException
 *
 * @package MiBo\Taxonomy\Exceptions
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 2.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
final class CouldNotValidateTINException extends RuntimeException implements TinValidationExceptionInterface
{
}
