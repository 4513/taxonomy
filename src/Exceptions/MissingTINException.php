<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Exceptions;

use MiBo\Taxonomy\Contracts\TaxExceptionInterface;
use RuntimeException;

/**
 * Class MissingTINException
 *
 * @package MiBo\Taxonomy\Exceptions
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
final class MissingTINException extends RuntimeException implements TaxExceptionInterface
{
}
