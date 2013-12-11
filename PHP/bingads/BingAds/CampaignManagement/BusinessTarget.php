<?php

namespace BingAds\CampaignManagement;

/**
 * Beginning early Q3 2013, business location targeting will no longer be supported. All of your business targets will be automatically converted to radius targets within the same target object. Please update your application to use radius targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd796980(v=msads.80).aspx BusinessTarget Data Object
 */
final class BusinessTarget
{
    /**
     * An array of BusinessTargetBid objects that specifies the business locations to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var BusinessTargetBid[]
     */
    public $Bids;
}
