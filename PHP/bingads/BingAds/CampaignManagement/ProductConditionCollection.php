<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
 * @link http://msdn.microsoft.com/en-us/library/jj721704(v=msads.90).aspx ProductConditionCollection Data Object
 */
final class ProductConditionCollection
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad. You can specify a maximum of 8 conditions and each condition must specify a unique operand. For a product to be served, it must meet all conditions.
     * @var ProductCondition[]
     */
    public $Conditions;
}
