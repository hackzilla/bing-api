<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a product criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj689539(v=msads.80).aspx Product Data Object
 */
final class Product extends Criterion
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad. You can specify a maximum of 3 conditions and each condition must specify a unique operand. For a product to be served, it must meet all conditions.
     * @var ProductCondition[]
     */
    public $Conditions;
}
