<?php
// Generated on 8/9/2013 5:26:28 AM

namespace BingAds\Optimizer;

/**
 * Defines the possible types of campaign budgets.
 * @link http://msdn.microsoft.com/en-us/library/hh418067(v=msads.80).aspx BudgetLimitType Value Set
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
 * Defines the possible error codes that the Optimizer service operations can return.
 * @link http://msdn.microsoft.com/en-us/library/hh418057(v=msads.80).aspx ErrorCodes Value Set
 */
final class ErrorCodes
{
    const InternalError = 'InternalError';
    const NullRequest = 'NullRequest';
    const InvalidCredentials = 'InvalidCredentials';
    const UserIsNotAuthorized = 'UserIsNotAuthorized';
    const QuotaNotAvailable = 'QuotaNotAvailable';
    const InvalidDateObject = 'InvalidDateObject';
    const RequestMissingHeaders = 'RequestMissingHeaders';
    const ApiInputValidationError = 'ApiInputValidationError';
    const APIExecutionError = 'APIExecutionError';
    const NullParameter = 'NullParameter';
    const OperationNotSupported = 'OperationNotSupported';
    const InvalidVersion = 'InvalidVersion';
    const NullArrayArgument = 'NullArrayArgument';
    const ConcurrentRequestOverLimit = 'ConcurrentRequestOverLimit';
    const InvalidAccount = 'InvalidAccount';
    const TimestampNotMatch = 'TimestampNotMatch';
    const EntityNotExistent = 'EntityNotExistent';
    const NameTooLong = 'NameTooLong';
    const FilterListOverLimit = 'FilterListOverLimit';
    const InvalidAccountId = 'InvalidAccountId';
    const InvalidCustomerId = 'InvalidCustomerId';
    const CustomerIdHasToBeSpecified = 'CustomerIdHasToBeSpecified';
    const AccountIdHasToBeSpecified = 'AccountIdHasToBeSpecified';
    const FutureFeatureCode = 'FutureFeatureCode';
    const InvalidOpportunityKeysList = 'InvalidOpportunityKeysList';
    const OpportunityExpired = 'OpportunityExpired';
    const OpportunityAlreadyApplied = 'OpportunityAlreadyApplied';
    const OpportunityKeysArrayShouldNotBeNullOrEmpty = 'OpportunityKeysArrayShouldNotBeNullOrEmpty';
    const OpportunityKeysArrayExceedsLimit = 'OpportunityKeysArrayExceedsLimit';
    const InvalidOpportunityKey = 'InvalidOpportunityKey';
    const CampaignBudgetAmountIsAboveLimit = 'CampaignBudgetAmountIsAboveLimit';
    const CampaignBudgetAmountIsBelowConfiguredLimit = 'CampaignBudgetAmountIsBelowConfiguredLimit';
    const CampaignBudgetAmountIsLessThanSpendAmount = 'CampaignBudgetAmountIsLessThanSpendAmount';
    const CampaignBudgetLessThanAdGroupBudget = 'CampaignBudgetLessThanAdGroupBudget';
    const CampaignDailyTargetBudgetAmountIsInvalid = 'CampaignDailyTargetBudgetAmountIsInvalid';
    const IncrementalBudgetAmountRequiredForDayTarget = 'IncrementalBudgetAmountRequiredForDayTarget';
    const BidsAmountsGreaterThanCeilingPrice = 'BidsAmountsGreaterThanCeilingPrice';
    const KeywordExactBidAmountsGreaterThanCeilingPrice = 'KeywordExactBidAmountsGreaterThanCeilingPrice';
    const KeywordPhraseBidAmountsGreaterThanCeilingPrice = 'KeywordPhraseBidAmountsGreaterThanCeilingPrice';
    const KeywordBroadBidAmountsGreaterThanCeilingPrice = 'KeywordBroadBidAmountsGreaterThanCeilingPrice';
    const BidAmountsLessThanFloorPrice = 'BidAmountsLessThanFloorPrice';
    const KeywordExactBidAmountsLessThanFloorPrice = 'KeywordExactBidAmountsLessThanFloorPrice';
    const KeywordPhraseBidAmountsLessThanFloorPrice = 'KeywordPhraseBidAmountsLessThanFloorPrice';
    const KeywordBroadBidAmountsLessThanFloorPrice = 'KeywordBroadBidAmountsLessThanFloorPrice';
    const KeywordAlreadyExists = 'KeywordAlreadyExists';
    const MaxKeywordsLimitExceededForAccount = 'MaxKeywordsLimitExceededForAccount';
    const MaxKeywordsLimitExceededForAdGroup = 'MaxKeywordsLimitExceededForAdGroup';
}

/**
 * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
 * @link http://msdn.microsoft.com/en-us/library/hh418054(v=msads.80).aspx BudgetOpportunity Data Object
 */
final class BudgetOpportunity extends Opportunity
{
    /**
     * The estimated date by when the campaign's current monthly budget will be depleted.
     * @var dateTime
     */
    public $BudgetDepletionDate;

    /**
     * The type of budget that the campaign uses. For possible values, see BudgetLimitType.
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
     * @var int
     */
    public $IncreaseInClicks;

    /**
     * The estimated impressions opportunities corresponding to the suggested budget.
     * @var int
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
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169131(v=msads.80).aspx BatchError Data Object
 */
final class BatchError
{
    /**
     * A numeric error code that identifies the error.
     * @var ErrorCodes
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169126(v=msads.80).aspx OperationError Data Object
 */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var ErrorCodes
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
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169127(v=msads.80).aspx ApiFaultDetail Data Object
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169130(v=msads.80).aspx AdApiError Data Object
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
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dn169129(v=msads.80).aspx AdApiFaultDetail Data Object
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
 * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
 * @link http://msdn.microsoft.com/en-us/library/hh802384(v=msads.80).aspx BidOpportunity Data Object
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
     * @var int
     */
    public $EstimatedIncreaseInClicks;

    /**
     * The estimated increase in spend corresponding to the suggested bid.
     * @var double
     */
    public $EstimatedIncreaseInCost;

    /**
     * The estimated impressions opportunities corresponding to the suggested bid.
     * @var int
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
 * Defines an object that contains a suggested keyword and bid value.
 * @link http://msdn.microsoft.com/en-us/library/jj649133(v=msads.80).aspx KeywordOpportunity Data Object
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
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169132(v=msads.80).aspx ApplicationFault Data Object
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
 * This is the base class from which opportunity objects derive. The class contains the key used to identify the opportunity and the date by when the opportunity expires.
 * @link http://msdn.microsoft.com/en-us/library/hh418063(v=msads.80).aspx Opportunity Data Object
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
 * Gets the campaign budget opportunities that exist for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/hh418061(v=MSADS.80).aspx GetBudgetOpportunitiesRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh418061(v=MSADS.80).aspx GetBudgetOpportunitiesResponse Response Object
 */
final class GetBudgetOpportunitiesResponse
{
    /**
     * An array of BudgetOpportunity objects that identify the campaigns whose clicks and impressions may increase if you were to apply the recommended budget. To apply the recommended budget, call the ApplyOpportunities operation.
     * @var BudgetOpportunity[]
     */
    public $Opportunities;
}

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

/**
 * Response object for the GetBidOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh802389(v=MSADS.80).aspx GetBidOpportunitiesResponse Response Object
 */
final class GetBidOpportunitiesResponse
{
    /**
     * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the recommended match-type bid value. To apply the recommended bid value, call the ApplyOpportunities operation.
     * @var BidOpportunity[]
     */
    public $Opportunities;
}

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group. The keyword suggestion also includes a suggested bid value.
 * @link http://msdn.microsoft.com/en-us/library/jj649131(v=MSADS.80).aspx GetKeywordOpportunitiesRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj649131(v=MSADS.80).aspx GetKeywordOpportunitiesResponse Response Object
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
 * Applies the recommended budget opportunities.
 * @link http://msdn.microsoft.com/en-us/library/hh418055(v=MSADS.80).aspx ApplyBudgetOpportunitiesRequest Request Object
 */
final class ApplyBudgetOpportunitiesRequest
{
    /**
     * The identifier of the account to apply the recommended budget opportunities to.
     * @var long
     */
    public $AccountId;

    /**
     * The list of keys that identify the budget opportunities that you want to apply. The maximum number of keys that you can specify is 10,000.
     * @var string[]
     */
    public $OpportunityKeys;
}

/**
 * Response object for the ApplyBudgetOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh418055(v=MSADS.80).aspx ApplyBudgetOpportunitiesResponse Response Object
 */
final class ApplyBudgetOpportunitiesResponse
{
}

/**
 * Applies the recommended opportunities that the get opportunities operations returned, for example the GetBidOpportunities operation.
 * @link http://msdn.microsoft.com/en-us/library/hh802390(v=MSADS.80).aspx ApplyOpportunitiesRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh802390(v=MSADS.80).aspx ApplyOpportunitiesResponse Response Object
 */
final class ApplyOpportunitiesResponse
{
}


?>
