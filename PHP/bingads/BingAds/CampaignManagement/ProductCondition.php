<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a condition that determines whether a product is selected.
 * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.90).aspx ProductCondition Data Object
 */
final class ProductCondition
{
    /**
     * The condition's attribute value.
     * @var string
     */
    public $Attribute;

    /**
     * The condition's operand. The operands implicitly include the equal operator. For example, read Brand as Brand=.
     * @var string
     */
    public $Operand;
}
