<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.90).aspx Campaign Data Object
 */
final class Campaign
{
    /**
     * The budget type determines whether the campaign uses a daily budget or a monthly budget, and how the budget is spent. For possible values, see BudgetLimitType.
     * @var BudgetLimitType
     */
    public $BudgetType;

    /**
     * Conversion tracking is no longer supported at the campaign level. If you set this element, the value is ignored.
     * @var boolean
     */
    public $ConversionTrackingEnabled;

    /**
     * The amount to spend daily on the campaign. You must set the daily budget amount if BudgetType is set to DailyBudgetAccelerated or DailyBudgetStandard.
     * @var double
     */
    public $DailyBudget;

    /**
     * Determines whether daylight-saving time is enabled.
     * @var boolean
     */
    public $DaylightSaving;

    /**
     * The description of the campaign. The description can contain a maximum of 1,000 characters.
     * @var string
     */
    public $Description;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the campaign.
     * @var long
     */
    public $Id;

    /**
     * The monthly budget of the campaign. You must specify a monthly budget only if BudgetType is set to MonthlyBudgetSpendUntilDepleted.
     * @var double
     */
    public $MonthlyBudget;

    /**
     * The name of the campaign. The name must be unique among all active or paused campaigns within the account. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * The status of the campaign.
     * @var CampaignStatus
     */
    public $Status;

    /**
     * The time zone where the campaign operates. For possible values, see Time Zones.
     * @var string
     */
    public $TimeZone;
}
