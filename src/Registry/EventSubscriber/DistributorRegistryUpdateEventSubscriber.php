<?php

namespace Drupal\dmf_distributor_json_request\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\JsonRequest\DistributorJsonRequestInitialization;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

/**
 * Event subscriber for distributor registry updates from JSON request.
 */
class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber
{
    /**
     * Constructs a DistributorRegistryUpdateEventSubscriber object.
     */
    public function __construct()
    {
        parent::__construct(new DistributorJsonRequestInitialization('dmf_distributor_json_request'));
    }
}
