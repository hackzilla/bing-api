<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the type of analytics that campaigns in the specified accounts use.
 * @link http://msdn.microsoft.com/en-us/library/gg985279(v=MSADS.80).aspx SetAnalyticsTypeRequest Request Object
 */
final class SetAnalyticsTypeRequest
{
    /**
     * An array of AccountAnalyticsType objects that contains the identifier of an account and the type of analytics that campaigns in the account use.
     * @var AccountAnalyticsType[]
     */
    public $AccountAnalyticsTypes;
}
