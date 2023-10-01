<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Contracts;

/**
 * Interface ProductTaxonomy
 *
 * This Interface mirrors any product taxonomy, used to fully classify goods or services.
 *
 *  Product classification or product taxonomy is a type of economic taxonomy which organizes
 * products for a variety of purposes. However, not only products can be referred to in
 * a standardized way but also sales practices in form of the “Incoterms” and industries can
 * be classified into categories.
 *  Some standard product classifications include:
 * * CPA - *Classification of Products by Activity*, a product nomenclature that was used in
 * the European Economic Community and now in use in the EU;
 * * CPC - *Central Product Classification*, a United Nations standard classification for products;
 * * ETIM - *(ElektroTechnisches InformationsModell) Technical Information Model*
 * * Global Classification
 * * HS - *Harmonized Commodity Description and Coding System*
 * * SITC - *Standard International Trade Classification*
 * * Trade in Services
 * * UNSPSC - *the United Nations Standard Products and Services Code*
 * * IEC Common Data Dictionary (IEC CDD) - *a product classification and product description based
 * on international standards and defined by the International Electrotechnical Commission*
 * * eCl@*s - *a global and ISO/IEC-conform system for classification and description of products
 * and services, maintained by the non-governmental eCl@*ss e.V. association*
 *
 * @package MiBo\Taxonomy\Contracts
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
interface ProductTaxonomy
{
    /**
     * Get code of the taxonomy.
     *
     * The code is used to fully classify a goods or a service.
     *
     * @return string Code of the taxonomy.
     */
    public function getCode(): string;

    /**
     * Checks that the provided code matches the current taxonomy.
     *
     *  If the provided value is an instance of ProductTaxonomy, the check
     * that both (current and provided) taxonomies are the same must be
     * performed.
     *
     *  Consider using ProductTaxonomy object instead of directly passing
     * the code, as more taxonomies might have same code for different
     * purposes, resulting in unexpected behavior.
     *
     * @param string|\MiBo\Taxonomy\Contracts\ProductTaxonomy $code Code
     *     of the taxonomy.
     *
     */
    public function is(string|self $code): bool;

    /**
     * Checks that the current taxonomy belongs to the provided one.
     *
     * @param string|\MiBo\Taxonomy\Contracts\ProductTaxonomy $code Code
     *     of the taxonomy.
     *
     */
    public function belongsTo(string|self $code): bool;

    /**
     *  Checks that the current taxonomy is hierarchical parent of the
     * provided one.
     *
     * @param string|\MiBo\Taxonomy\Contracts\ProductTaxonomy $code Code
     *     of the taxonomy.
     *
     */
    public function wraps(string|self $code): bool;

    /**
     * Validates the given code.
     *
     * @param string $code Code of the taxonomy.
     *
     */
    public static function isValid(string $code): bool;
}
