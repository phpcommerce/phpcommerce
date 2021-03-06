<?php
namespace PHPCommerce\ERP\Domain;

use PHPCommerce\ERP\Domain\OrderInterface;

/**
 * <p>Generates a shared, static instance of NullOrderImpl.</p>
 *
 * @see NullOrderImpl
 * @author apazzolini
 */
interface NullOrderFactoryInterface {
    /**
     * @return OrderInterface
     */
    public function getNullOrder();
}
