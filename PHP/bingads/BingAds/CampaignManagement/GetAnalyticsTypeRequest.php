<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the type of analytics that is set for the specified accounts.
 * @link http://msdn.microsoft.com/en-us/library/gg985290(v=MSADS.80).aspx GetAnalyticsTypeRequest Request Object
 */
final class GetAnalyticsTypeRequest
{
    /**
     * An array of identifiers of the accounts for which you want to determine the type of analytics used.
     * @var long[]
     */
    public $AccountIds;
}
