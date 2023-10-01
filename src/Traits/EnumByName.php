<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Traits;

use ValueError;

/**
 * Trait EnumByName
 *
 * @package MiBo\Taxonomy\Traits
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 *
 * @internal Meant to use only within the Enums of Taxonomy. No BC promise at all.
 *
 * @mixin \BackedEnum
 */
trait EnumByName
{
    final public static function fromName(string $name): static
    {
        return self::tryFromName($name) ?? throw new ValueError(
            '"' . $name . '" is not a valid key for enum "' . static::class . '"'
        );
    }

    final public static function tryFromName(string $name): ?static
    {
        foreach (static::cases() as $case) {
            if ($case->name === $name) {
                return $case;
            }
        }

        return null;
    }
}
