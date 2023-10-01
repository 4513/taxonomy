<?php

declare(strict_types=1);

namespace MiBo\Taxonomy\Contracts;

/**
 * Interface SubjectToProductTaxonomy
 *
 *  Anything that is subject to a product taxonomy, that includes any goods or services
 * should implement this interface. Furthermore, anything that might be classified by
 * a product taxonomy should implement this interface as well, for example a product's
 * price might be classified by a product taxonomy because of the object that it is
 * related to.
 *
 * @package MiBo\Taxonomy\Contracts
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
interface SubjectToProductTaxonomy
{
    /**
     * Get classification of the entity.
     *
     * @return \MiBo\Taxonomy\Contracts\ProductTaxonomy Classification.
     */
    public function getProductTaxonomy(): ProductTaxonomy;
}
