<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Tests;

use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * class EnumByNameTest
 *
 * @package MiBo\Taxonomy\Tests
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 *
 * @coversDefaultClass \MiBo\Taxonomy\Traits\EnumByName
 */
final class EnumByNameTest extends TestCase
{
    /**
     * @small
     *
     * @covers ::tryFromName
     *
     *
     *
     * @dataProvider getData
     */
    public function testTry(bool $success, string $name): void
    {
        $result = TestingEnum::tryFromName($name);

        if ($success) {
            $this->assertSame($name, $result->name);

            return;
        }

        $this->assertNull($result);
    }

    /**
     * @small
     *
     * @covers ::fromName
     *
     *
     *
     * @dataProvider getData
     */
    public function testException(bool $success, string $name): void
    {
        if (!$success) {
            $this->expectException(ValueError::class);
            $this->expectExceptionMessage('"' . $name . '" is not a valid key for enum "' . TestingEnum::class . '"');
        }

        $result = TestingEnum::fromName($name);

        $this->assertSame($name, $result->name);
    }

    /** @return array<string, array{0: bool, 1: string}> */
    public static function getData(): array
    {
        return [
            'Existing #1' => [
                true,
                'CASE_1',
            ],
            'Existing #2' => [
                true,
                'CASE_2',
            ],
            'Existing #3' => [
                true,
                'CASE_3',
            ],
            'Non-existing #1' => [
                false,
                'CASE_4',
            ],
            'Non-existing #2' => [
                false,
                'CASE_5',
            ],
        ];
    }
}
