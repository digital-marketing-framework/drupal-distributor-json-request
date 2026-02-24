<?php

namespace Drupal\dmf_distributor_json_request\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\JsonRequest\DistributorJsonRequestInitialization;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

/**
 * Event subscriber for core registry updates from distributor JSON request.
 */
class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber
{
    /**
     * Constructs a CoreRegistryUpdateEventSubscriber object.
     */
    public function __construct()
    {
        parent::__construct(new DistributorJsonRequestInitialization('dmf_distributor_json_request'));
    }
}
