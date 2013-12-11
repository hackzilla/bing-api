<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the identifier of an account and the type of analytics that campaigns in the account use.
 * @link http://msdn.microsoft.com/en-us/library/gg985268(v=msads.80).aspx AccountAnalyticsType Data Object
 */
final class AccountAnalyticsType
{
    /**
     * The identifier of the account to which the analytics type applies.
     * @var long
     */
    public $AccountId;

    /**
     * Determines the type of analytics that campaigns in the account use. For possible values, see the AnalyticsType value set.
     * @var AnalyticsType
     */
    public $Type;
}
