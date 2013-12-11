<?php
// Generated on 10/23/2013 5:21:58 AM

namespace BingAds\Optimizer;

/**
 * Defines the possible types of campaign budgets.
 * @link http://msdn.microsoft.com/en-us/library/hh418067(v=msads.90).aspx BudgetLimitType Value Set
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent in a couple of days, weeks, or not at all. */
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

    /** A daily budget that is spread throughout the day. */
    const DailyBudgetStandard = 'DailyBudgetStandard';

    /** A daily budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent within a couple of minutes, hours, or not at all. */
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
}

/**
 * Defines the possible values of a campaign budget point.
 * @link http://msdn.microsoft.com/en-us/library/dn434661(v=msads.90).aspx BudgetPointType Value Set
 */
final class BudgetPointType
{
    /** The budget point includes the current budget. */
    const Current = 'Current';

    /** The budget point includes the optimal suggested budget. The proposed budget is estimated to yield the optimal ratio of increased clicks to minimal budget increase. */
    const Suggested = 'Suggested';

    /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
    const Maximum = 'Maximum';

    /** The budget point includes a proposed budget other than current, maximum, or suggested. */
    const Other = 'Other';
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169130(v=msads.90).aspx AdApiError Data Object
 */
final class AdApiError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that contains additional details about the error. This string can be empty.
     * @var string
     */
    public $Detail;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169132(v=msads.90).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     * @var string
     */
    public $TrackingId;
}

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dn169129(v=msads.90).aspx AdApiFaultDetail Data Object
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     * @var AdApiError[]
     */
    public $Errors;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169127(v=msads.90).aspx ApiFaultDetail Data Object
 */
final class ApiFaultDetail extends ApplicationFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169131(v=msads.90).aspx BatchError Data Object
 */
final class BatchError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the batch error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * This is the base class from which opportunity objects derive. The class contains the key used to identify the opportunity and the date by when the opportunity expires.
 * @link http://msdn.microsoft.com/en-us/library/hh418063(v=msads.90).aspx Opportunity Data Object
 */
class Opportunity
{
    /**
     * The date by when the budget recommendation expires. The dateTime object contains only the date portion.
     * @var dateTime
     */
    public $ExpirationDate;

    /**
     * An identifier that uniquely identifies the budget opportunity. You use this identifier when calling the ApplyOpportunites operation.
     * @var string
     */
    public $OpportunityKey;
}

/**
 * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.The bid opportunity is an estimate based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/hh802384(v=msads.90).aspx BidOpportunity Data Object
 */
final class BidOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group that owns the keyword.
     * @var long
     */
    public $AdGroupId;

    /**
     * The current keyword bid amount specified for the match type in the MatchType element.
     * @var double
     */
    public $CurrentBid;

    /**
     * The estimated clicks opportunities corresponding to the suggested bid.
     * @var double
     */
    public $EstimatedIncreaseInClicks;

    /**
     * The estimated increase in spend corresponding to the suggested bid.
     * @var double
     */
    public $EstimatedIncreaseInCost;

    /**
     * The estimated impressions opportunities corresponding to the suggested bid.
     * @var long
     */
    public $EstimatedIncreaseInImpressions;

    /**
     * The identifier of the keyword to which the bid opportunity applies.
     * @var long
     */
    public $KeywordId;

    /**
     * The match type to which the suggested bid value applies. The possible values are:
     * @var string
     */
    public $MatchType;

    /**
     * The suggested bid based on the last 7 days of performance history for the corresponding ad group.
     * @var double
     */
    public $SuggestedBid;
}

/**
 * Defines an object that contains daily impressions and clicks estimates for one of the last 15 days.The budget landscape point is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434658(v=msads.90).aspx BudgetLandscapePoint Data Object
 */
final class BudgetLandscapePoint
{
    /**
     * Represents one day within the last 15 days.
     * @var dateTime
     */
    public $BudgetLandscapePointDate;

    /**
     * The real historical campaign clicks performance for the day, if the budget on the corresponding day is equal to your current budget.
     * @var double
     */
    public $Clicks;

    /**
     * The estimated clicks performance for the day , given the provided BudgetAmount element of the BudgetPoint object.
     * @var double
     */
    public $EstimatedClicks;

    /**
     * The estimated impressions performance for the day, given the provided BudgetAmount element of the BudgetPoint object.
     * @var long
     */
    public $EstimatedImpressions;

    /**
     * The real historical campaign impressions performance for the day, if the budget on the corresponding day is equal to your current budget.
     * @var long
     */
    public $Impressions;
}

/**
 * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.The budget opportunity is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/hh418054(v=msads.90).aspx BudgetOpportunity Data Object
 */
final class BudgetOpportunity extends Opportunity
{
    /**
     * The type of budget that the campaign uses.
     * @var BudgetLimitType
     */
    public $BudgetType;

    /**
     * The identifier of the campaign to which the suggested budget applies.
     * @var long
     */
    public $CampaignId;

    /**
     * The campaign's current budget.
     * @var double
     */
    public $CurrentBudget;

    /**
     * The estimated clicks opportunities corresponding to the suggested budget.
     * @var double
     */
    public $IncreaseInClicks;

    /**
     * The estimated impressions opportunities corresponding to the suggested budget.
     * @var long
     */
    public $IncreaseInImpressions;

    /**
     * The estimated percentage increase in clicks corresponding to the suggested budget.
     * @var int
     */
    public $PercentageIncreaseInClicks;

    /**
     * The estimated percentage increase in impressions corresponding to the suggested budget.
     * @var int
     */
    public $PercentageIncreaseInImpressions;

    /**
     * The suggested budget based on the last 15 days of performance history for the corresponding campaign.
     * @var double
     */
    public $RecommendedBudget;
}

/**
 * Defines an object that contains a budget amount and an estimate of daily impressions, clicks, and cost for this budget amount averaged over the last 15 days. Additionally, the object contains a list of budget landscape points with daily impressions and clicks estimates for the given budget amount during the last 15 days.The budget point is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434659(v=msads.90).aspx BudgetPoint Data Object
 */
final class BudgetPoint
{
    /**
     * A potential new budget.
     * @var double
     */
    public $BudgetAmount;

    /**
     * The list of budget landscape points with daily impressions and clicks estimates for the last 15 days.
     * @var BudgetLandscapePoint[]
     */
    public $BudgetLandscapePoints;

    /**
     * The type of budget relative to a list of budget points. For example, if the budget point type is Current then this object's BudgetAmount element would be equal to the corresponding campaign's daily budget.
     * @var BudgetPointType
     */
    public $BudgetPointType;

    /**
     * The estimated average daily clicks for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyClicks;

    /**
     * The estimated average daily cost for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyCost;

    /**
     * The estimated average daily impressions for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyImpressions;
}

/**
 * Defines an object that contains a list of budget points for a campaign. You may use the budget points to compare the proposed budgets to your current budget, with the corresponding estimates for impressions, clicks, and cost.The campaign budget landscape is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434660(v=msads.90).aspx CampaignBudgetLandscape Data Object
 */
final class CampaignBudgetLandscape extends Opportunity
{
    /**
     * The date when data for budget points were most recently updated by the system.
     * @var dateTime
     */
    public $BaseDate;

    /**
     * The list of budget points, including budget point type and budget landscape points.
     * @var BudgetPoint[]
     */
    public $BudgetPoints;

    /**
     * The identifier of the campaign corresponding to the list of budget points.
     * @var long
     */
    public $CampaignId;
}

/**
 * Defines an object that contains a suggested keyword and bid value.
 * @link http://msdn.microsoft.com/en-us/library/jj649133(v=msads.90).aspx KeywordOpportunity Data Object
 */
final class KeywordOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group to apply the suggested keyword to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign that owns the ad group.
     * @var long
     */
    public $CampaignId;

    /**
     * An indicator of competitive bids for this keyword relative to all search keywords. The competition score ranges from 0 to 1.00, where 0 indicates low competition and 1.00 indicates that there is a high number of advertisers competing for this keyword.
     * @var double
     */
    public $Competition;

    /**
     * The match type that the bid applies to. The following are the possible match-type values.
     * @var int
     */
    public $MatchType;

    /**
     * The estimated monthly volume of user search queries that may match the suggested keyword for the corresponding MatchType element.
     * @var long
     */
    public $MonthlySearches;

    /**
     * The suggested bid that may result in your ads serving on the first page of the search query results.
     * @var double
     */
    public $SuggestedBid;

    /**
     * The suggested keyword.
     * @var string
     */
    public $SuggestedKeyword;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169126(v=msads.90).aspx OperationError Data Object
 */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Gets the campaign budget opportunities of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunitiesRequest Request Object
 */
final class GetBudgetOpportunitiesRequest
{
    /**
     * The identifier of the account for which you want to discover possible campaign budget opportunities.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetBudgetOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunitiesResponse Response Object
 */
final class GetBudgetOpportunitiesResponse
{
    /**
     * An array of BudgetOpportunity objects that identify the campaigns whose clicks and impressions may increase if you were to apply the suggested budget. To apply the suggested budget, call the ApplyOpportunities operation.
     * @var BudgetOpportunity[]
     */
    public $Opportunities;
}

/**
 * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account. You may use the budget points to compare your current budget to any of the proposed budgets.
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscapeRequest Request Object
 */
final class GetBudgetLandscapeRequest
{
    /**
     * The identifier of the account for which you want to discover a list of campaign budget suggestions.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaign for which you want to discover a list of campaign budget suggestions.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the GetBudgetLandscape service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscapeResponse Response Object
 */
final class GetBudgetLandscapeResponse
{
    /**
     * A list of CampaignBudgetLandscape objects that identify one or more campaigns with suggested budget points.
     * @var CampaignBudgetLandscape[]
     */
    public $CampaignBudgetLandscapes;
}

/**
 * Gets the keyword bid opportunities of the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunitiesRequest Request Object
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

/**
 * Response object for the GetBidOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunitiesResponse Response Object
 */
final class GetBidOpportunitiesResponse
{
    /**
     * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the suggested match-type bid value. To apply the suggested bid value, call the ApplyOpportunities operation.
     * @var BidOpportunity[]
     */
    public $Opportunities;
}

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group. The keyword suggestion also includes a suggested bid value.
 * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunitiesRequest Request Object
 */
final class GetKeywordOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the specified campaign.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the ad group to get keyword suggestions for.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign that owns the specified ad group.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the GetKeywordOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunitiesResponse Response Object
 */
final class GetKeywordOpportunitiesResponse
{
    /**
     * A list of KeywordOpportunity objects that identifies a suggested keyword and bid value. The list will be empty if there are no suggestions, which may occur if the ad group does not contain existing ads and keywords.
     * @var KeywordOpportunity[]
     */
    public $Opportunities;
}

/**
 * Applies the recommended opportunities that the get opportunities operations returned for example, the GetBidOpportunities operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunitiesRequest Request Object
 */
final class ApplyOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the entities to apply the opportunities to.
     * @var long
     */
    public $AccountId;

    /**
     * An array of keys that identifies the opportunities to apply. You can specify a maximum of 10,000 keys.
     * @var string[]
     */
    public $OpportunityKeys;
}

/**
 * Response object for the ApplyOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunitiesResponse Response Object
 */
final class ApplyOpportunitiesResponse
{
}


?>
