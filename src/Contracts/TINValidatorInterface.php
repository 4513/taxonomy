<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Contracts;

/**
 * Interface TINValidatorInterface
 *
 * @package MiBo\Taxonomy\Contracts
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.2
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
interface TINValidatorInterface
{
    /**
     * Validates a TIN for a given country code.
     *
     * @param \MiBo\Taxonomy\Contracts\TaxpayerIdentificationNumberInterface $tin
     * @param non-empty-string $countryCode
     *
     * @return void
     *
     * @throws \MiBo\Taxonomy\Exceptions\InvalidTINFormatException If the TIN format for the given country
     *     is not valid.
     * @throws \MiBo\Taxonomy\Exceptions\InvalidTINValueException If the TIN for the given country is invalid.
     * @throws \MiBo\Taxonomy\Exceptions\CouldNotValidateTINException If the TIN could not be validated. This
     *     may be thrown if the implementation relies on an external service that is not available or if the
     *     implementation does not support validation for the given country code.
     */
    public function validate(TaxpayerIdentificationNumberInterface $tin, string $countryCode): void;
}
