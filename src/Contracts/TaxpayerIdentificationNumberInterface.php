<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Contracts;

/**
 * Interface TaxpayerIdentificationNumberInterface
 *
 *  TIN is an identifying number used for tax purposes in the United States and in other countries under
 * the Common Reporting Standard. In the United States, it is also known as a Tax Identification Number
 * or Federal Taxpayer Identification Number. A TIN may be assigned by the Social Security Administration
 * or by the Internal Revenue Service (IRS).
 *  Most of the countries of the European Union have a TIN for each taxpayer. Though initially intended
 * solely for identification, TINs have become de facto national identification numbers.
 *
 * @package MiBo\Taxonomy\Contracts
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.2
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
interface TaxpayerIdentificationNumberInterface
{
    /**
     * Returns the value of the TIN as a string.
     *
     * @return non-empty-string The TIN.
     */
    public function getId(): string;
}
