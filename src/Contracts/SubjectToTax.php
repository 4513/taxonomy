<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Contracts;

/**
 * Interface SubjectToTax
 *
 * @package MiBo\Taxonomy\Contracts
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
interface SubjectToTax
{
    /**
     * Determines whether the subject is a taxpayer.
     *
     *  Do not confuse this with the 'isVATPayer' method. This method determines whether the subject
     * is capable and required to pay any type of tax, including direct taxes, such as income tax.
     *  To determine whether the subject is paying indirect taxes, use different method.
     *
     * @return bool True if the subject is a taxpayer, false otherwise.
     */
    public function isTaxpayer(): bool;

    /**
     * Returns Taxpayer Identification Number.
     *
     *  Normally, in the EU, every taxpayer is identified by their TIN. Sometimes, the TIN might
     * be a national identification number for that person. For example, in Czechia, the TIN is
     * the same as birth number of the person.
     *
     * @return non-empty-string The TIN.
     *
     * @throws \MiBo\Taxonomy\Exceptions\MissingTINException If for some reason the subject does
     *     not have a TIN.
     */
    public function getTIN(): string;
}
