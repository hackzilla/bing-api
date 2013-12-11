<?php

namespace BingAds\Optimizer;

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
