<?php

namespace BingAds\Optimizer;

/**
 * Gets the keyword bid opportunities of the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/hh802389(v=MSADS.80).aspx GetBidOpportunitiesRequest Request Object
 */
final class GetBidOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the campaign specified in the CampaignId element.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the ad group for which you want to determine keyword bid opportunities.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
     * @var long
     */
    public $CampaignId;
}
