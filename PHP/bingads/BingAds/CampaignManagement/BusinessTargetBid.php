<?php

namespace BingAds\CampaignManagement;

/**
 * Beginning early Q3 2013, business location targeting will no longer be supported. All of your business targets will be automatically converted to radius targets within the same target object. Please update your application to use radius targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd797235(v=msads.80).aspx BusinessTargetBid Data Object
 */
final class BusinessTargetBid
{
    /**
     * The identifier of the business to target.
     * @var long
     */
    public $BusinessId;

    /**
     * The percent amount used to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The radius, in miles, that specifies the area surrounding the business location to target. The ads will participate in the auction if the user is within the specified radius of the business.
     * @var int
     */
    public $Radius;
}
