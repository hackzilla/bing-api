<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAnalyticsType service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985290(v=MSADS.80).aspx GetAnalyticsTypeResponse Response Object
 */
final class GetAnalyticsTypeResponse
{
    /**
     * An array of AnalyticsType values. The items in the array are in the same order as the account identifiers that you specified in the request. The type determines the type of analytics that campaigns in the accounts use.
     * @var AnalyticsType[]
     */
    public $Types;
}
