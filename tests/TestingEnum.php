<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Tests;

use MiBo\Taxonomy\Traits\EnumByName;

/**
 * Enum TestingEnum
 *
 * @package MiBo\Taxonomy\Tests
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
enum TestingEnum
{
    use EnumByName;

    case CASE_1;
    case CASE_2;
    case CASE_3;
}
