<?php
namespace PegasusCommerce\Common\Vendor\Service\Monitor;

use PegasusCommerce\Common\Vencor\Service\Type\ServiceStatusType;

interface ServiceStatusDetectable {

    /**
     * @return ServiceStatusType
     */
    public function getServiceStatus();

    /**
     * @return String
     */
    public function getServiceName();

    /**
     * @throws Exception
     */
    public function process($arg);

}
