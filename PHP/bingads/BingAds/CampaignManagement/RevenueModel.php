<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies the type of revenue model that the conversion uses. The object also includes a constant revenue value for conversions that use the constant revenue model.
 * @link http://msdn.microsoft.com/en-us/library/gg985265(v=msads.80).aspx RevenueModel Data Object
 */
final class RevenueModel
{
    /**
     * The revenue value associated with the conversion. Set this element only if Type is set to Constant.
     * @var double
     */
    public $ConstantRevenueValue;

    /**
     * Determines whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value.
     * @var RevenueModelType
     */
    public $Type;
}
