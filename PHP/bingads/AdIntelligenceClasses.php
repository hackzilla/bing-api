<?php
// Generated on 8/9/2013 5:26:27 AM

namespace BingAds\AdIntelligence;

/**
 * Defines the possible time periods that determine the pool of data that the service uses to get the performance statistics of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg670967(v=msads.80).aspx TimeInterval Value Set
 */
final class TimeInterval
{
    /** Use data from the previous calendar month. Note that it can take up to 72 hours for the previous calendar month's data to be available. For example, if you request data on August 1st, 2nd or 3rd, and July's data is not ready, the response will be based on June's data. */
    const Last30Days = 'Last30Days';

    /** Use data from the previous seven days (excluding today's data). */
    const Last7Days = 'Last7Days';

    /** Use data from the previous day. */
    const LastDay = 'LastDay';
}

/**
 * Defines the possible scale values. The context in which the scale is used determines its meaning.
 * @link http://msdn.microsoft.com/en-us/library/gg670964(v=msads.80).aspx Scale Value Set
 */
final class Scale
{
    /** For impressions, this value indicates that the number of impressions is less than 1 million. For bid density, this value indicates that the density is less than 10 percent. */
    const Minimal = 'Minimal';

    /** For impressions, this value indicates that the number of impressions is in the range of 1 million to less than 2 million. For bid density, this value indicates that the density is in the range of 10 percent to less than 20 percent. */
    const Low = 'Low';

    /** For impressions, this value indicates that the number of impressions is in the range of 2 million to less than 3 million. For bid density, this value indicates that the density is in the range of 20 percent to less than 30 percent. */
    const Medium = 'Medium';

    /** For impressions, this value indicates that the number of impressions is in the range of 3 million to less than 4 million. For bid density, this value indicates that the density is in the range of 30 percent to less than 50 percent. */
    const High = 'High';

    /** For impressions, this value indicates that the number of impressions is 4 million or more. For bid density, this value indicates that the density is 50 percent or more. */
    const VeryHigh = 'VeryHigh';
}

/**
 * Defines the possible positions where you can target an ad to appear in the search results or on a content-based webpage.
 * @link http://msdn.microsoft.com/en-us/library/gg986819(v=msads.80).aspx TargetAdPosition Value Set
 */
final class TargetAdPosition
{
    /** Target the first position at the top of the search results page. */
    const MainLine1 = 'MainLine1';

    /** Target the second, third, and fourth positions at the top of the search results page. */
    const MainLine = 'MainLine';

    /** Target any position on the right side of the search results page. */
    const SideBar = 'SideBar';
}

/**
 * Defines the possible keyword match type values.
 * @link http://msdn.microsoft.com/en-us/library/gg712238(v=msads.80).aspx MatchType Value Set
 */
final class MatchType
{
    /** An exact match results when all of the words in the keyword exactly match the user's search query. */
    const Exact = 'Exact';

    /** A phrase match results when all of the words in the keyword are present in the user's search query and are in the same order. */
    const Phrase = 'Phrase';

    /** A broad match results when words in the keyword are present in the user's search query; however, the word order can vary. */
    const Broad = 'Broad';

    /** A content match results when the keywords extracted from the content webpage match the keywords in the user's search query by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query. */
    const Content = 'Content';

    /** Aggregates the data across all match types. You can specify this type for the following operations. */
    const Aggregate = 'Aggregate';
}

/**
 * Defines the possible currency values.
 * @link http://msdn.microsoft.com/en-us/library/gg712234(v=msads.80).aspx Currency Value Set
 */
final class Currency
{
    /** The Canadian dollar. */
    const CanadianDollar = 'CanadianDollar';

    /** The Euro. */
    const EURO = 'EURO';

    /** The Singapore dollar. */
    const SingaporeDollar = 'SingaporeDollar';

    /** The British pound. */
    const UKPound = 'UKPound';

    /** The United States dollar. */
    const USDollar = 'USDollar';

    /** The Indian rupee. */
    const IndianRupee = 'IndianRupee';

    /** The Argentine Peso. */
    const ArgentinePeso = 'ArgentinePeso';

    /** The Venezuelan bolivar fuerte. */
    const Bolivar = 'Bolivar';

    /** The Chilean Peso. */
    const ChileanPeso = 'ChileanPeso';

    /** The Colombian Peso. */
    const ColombianPeso = 'ColombianPeso';

    /** The Danish Krone. */
    const DanishKrone = 'DanishKrone';

    /** The Mexican Peso. */
    const MexicanPeso = 'MexicanPeso';

    /** The Norwegian Krone. */
    const NorwegianKrone = 'NorwegianKrone';

    /** The Peru Nuevo Sol. */
    const NuevoSol = 'NuevoSol';

    /** The Swedish Krona. */
    const SwedishKrona = 'SwedishKrona';

    /** The Swiss Franc. */
    const SwissFranc = 'SwissFranc';

    /** The Brazilian Real. */
    const BrazilianReal = 'BrazilianReal';
}

/**
 * Defines the possible positions of an ad in the search results or on a content-based webpage.
 * @link http://msdn.microsoft.com/en-us/library/gg712236(v=msads.80).aspx AdPosition Value Set
 */
final class AdPosition
{
    /** Indicates all search result positions. */
    const All = 'All';

    /** The first ad to appear at the top of the search results page. */
    const MainLine1 = 'MainLine1';

    /** The second ad to appear at the top of the search results page. */
    const MainLine2 = 'MainLine2';

    /** The third ad to appear at the top of the search results page. */
    const MainLine3 = 'MainLine3';

    /** The fourth ad to appear at the top of the search results page. */
    const MainLine4 = 'MainLine4';

    /** The first ad to appear on the right side of the first search results page. */
    const SideBar1 = 'SideBar1';

    /** The second ad to appear on the right side of the first search results page. */
    const SideBar2 = 'SideBar2';

    /** The third ad to appear on the right side of the first search results page. */
    const SideBar3 = 'SideBar3';

    /** The fourth ad to appear on the right side of the first search results page. */
    const SideBar4 = 'SideBar4';

    /** The fifth ad to appear on the right side of the first search results page. */
    const SideBar5 = 'SideBar5';

    /** The sixth ad to appear on the right side of the first search results page. */
    const SideBar6 = 'SideBar6';

    /** The seventh ad to appear on the right side of the first search results page. */
    const SideBar7 = 'SideBar7';

    /** The eighth ad to appear on the right side of the first search results page. */
    const SideBar8 = 'SideBar8';

    /** The ninth ad to appear on the right side of the first search results page. */
    const SideBar9 = 'SideBar9';

    /** The tenth ad to appear on the right side of the first search results page. */
    const SideBar10 = 'SideBar10';

    /** Aggregates the data for all supported positions. You can specify this position for the following operations. */
    const Aggregate = 'Aggregate';
}

final class KeywordPerformance
{
    /**
     * @var string
     */
    public $Keyword;

    /**
     * @var double
     */
    public $AverageCpc;

    /**
     * @var Scale
     */
    public $Impressions;

    /**
     * @var Scale
     */
    public $BidDensity;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169086(v=msads.80).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169084(v=msads.80).aspx AdApiFaultDetail Data Object
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
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169090(v=msads.80).aspx BatchError Data Object
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169088(v=msads.80).aspx OperationError Data Object
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
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169087(v=msads.80).aspx ApiFaultDetail Data Object
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
 * Defines an object that contains a suggested keyword and a confidence score. The confidence score indicates the probability that the keyword would match a user's search query.
 * @link http://msdn.microsoft.com/en-us/library/gg670952(v=msads.80).aspx KeywordAndConfidence Data Object
 */
final class KeywordAndConfidence
{
    /**
     * The suggested keyword.
     * @var string
     */
    public $SuggestedKeyword;

    /**
     * A score from 0.0 to 1.0 that indicates the probability that the keyword would match a user's search query.
     * @var double
     */
    public $ConfidenceScore;
}

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified keyword could generate if you used the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg986821(v=msads.80).aspx EstimatedBidAndTraffic Data Object
 */
final class EstimatedBidAndTraffic
{
    /**
     * The keyword match type used to determine the estimates. For possible values, see the MatchType value set.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks per week that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum weekly cost of using the specified keyword.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum weekly cost of using the specified keyword.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The minimum bid value to use that could result in an ad appearing in the specified target position in the search results.
     * @var double
     */
    public $EstimatedMinBid;
}

/**
 * Defines an object that contains the keyword and the suggested minimum bid value for each match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986832(v=msads.80).aspx KeywordEstimatedBid Data Object
 */
final class KeywordEstimatedBid
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * An array of EstimatedBidAndTraffic objects that contains the suggested minimum bid value for the keyword and match type.
     * @var EstimatedBidAndTraffic[]
     */
    public $EstimatedBids;
}

/**
 * Defines an object that contains the identifier of the keyword and the suggested minimum bid value for the keyword and match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986827(v=msads.80).aspx KeywordIdEstimatedBid Data Object
 */
final class KeywordIdEstimatedBid
{
    /**
     * The identifier of the keyword to which the suggested minimum bid applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and the suggested minimum bid value for each match type.
     * @var KeywordEstimatedBid
     */
    public $KeywordEstimatedBid;
}

/**
 * Defines an object that contains the estimated search results position and estimated keyword statistics, such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified keyword could generate.
 * @link http://msdn.microsoft.com/en-us/library/gg986823(v=msads.80).aspx EstimatedPositionAndTraffic Data Object
 */
final class EstimatedPositionAndTraffic
{
    /**
     * The keyword match type used to determine the estimates. For possible values, see the MatchType value set.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum weekly cost of using the specified keyword.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum weekly cost of using the specified keyword.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost values, such as AverageCPC. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The position in the search results that could result if you used the specified maximum bid value.
     * @var AdPosition
     */
    public $EstimatedAdPosition;
}

/**
 * Defines an object that contains the keyword and the estimated position in the search results for each match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986826(v=msads.80).aspx KeywordEstimatedPosition Data Object
 */
final class KeywordEstimatedPosition
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * An array of EstimatedPositionAndTraffic objects that contains the position in the search results that the specified maximum bid value could yield.
     * @var EstimatedPositionAndTraffic[]
     */
    public $EstimatedPositions;
}

/**
 * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986824(v=msads.80).aspx KeywordIdEstimatedPosition Data Object
 */
final class KeywordIdEstimatedPosition
{
    /**
     * The identifier of the keyword to which the estimated position applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and position in the search results that the specified maximum bid value could yield for each keyword and match type.
     * @var KeywordEstimatedPosition
     */
    public $KeywordEstimatedPosition;
}

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified ad group could generate if you used the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/dn144841(v=msads.80).aspx AdGroupEstimatedBid Data Object
 */
final class AdGroupEstimatedBid
{
    /**
     * The estimated minimum number of clicks per week that the ad group could generate per week.
     * @var int
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks that the ad group could generate per week by using the specified keyword.
     * @var int
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC that the ad group could generate by using the specified match type and bid value.
     * @var decimal
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions that the ad group could generate per week.
     * @var int
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions that the ad group could generate per week.
     * @var int
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR that the ad group could generate by using the specified match type and bid value.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum weekly cost of using the specified keyword in the corresponding ad group.
     * @var decimal
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum weekly cost of using the specified keyword in the corresponding ad group.
     * @var decimal
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The minimum ad group level default bid value to use that could result in an ad appearing in the specified target position in the search results.
     * @var double
     */
    public $EstimatedAdGroupBid;
}

/**
 * Defines an object that you use to specify the start and end months of a date range.
 * @link http://msdn.microsoft.com/en-us/library/gg712241(v=msads.80).aspx MonthAndYear Data Object
 */
final class MonthAndYear
{
    /**
     * The month specified as an integer value in the range of 1 to 12, where 1 is January and 12 is December.
     * @var int
     */
    public $Month;

    /**
     * The year specified as a four-digit integer value.
     * @var int
     */
    public $Year;
}

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified month.
 * @link http://msdn.microsoft.com/en-us/library/gg712247(v=msads.80).aspx HistoricalSearchCount Data Object
 */
final class HistoricalSearchCount
{
    /**
     * The number of times that the keyword was used in a search query during the specified month.
     * @var int
     */
    public $SearchCount;

    /**
     * The month when the count was captured.
     * @var MonthAndYear
     */
    public $MonthAndYear;
}

/**
 * Defines an object that contains a keyword and the historical search count data for each month in the specified date range.
 * @link http://msdn.microsoft.com/en-us/library/gg712245(v=msads.80).aspx KeywordSearchCount Data Object
 */
final class KeywordSearchCount
{
    /**
     * The keyword to which the search count data applies.
     * @var string
     */
    public $Keyword;

    /**
     * An array of HistoricalSearchCount objects that contain a count of the number of times that the keyword was used in a search query. The array contains an item for each month in the specified date range. The items are ordered by calendar month.
     * @var HistoricalSearchCount[]
     */
    public $HistoricalSearchCounts;
}

/**
 * Defines an object that you use to specify the start and end dates of a date range.
 * @link http://msdn.microsoft.com/en-us/library/hh921738(v=msads.80).aspx DayMonthAndYear Data Object
 */
final class DayMonthAndYear
{
    /**
     * The day of the month.
     * @var int
     */
    public $Day;

    /**
     * The month specified as an integer value in the range of 1 through 12, where 1 is January and 12 is December.
     * @var int
     */
    public $Month;

    /**
     * The year specified as a four-digit integer value.
     * @var int
     */
    public $Year;
}

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
 * @link http://msdn.microsoft.com/en-us/library/hh921728(v=msads.80).aspx HistoricalSearchCountPeriodic Data Object
 */
final class HistoricalSearchCountPeriodic
{
    /**
     * The number of times that the keyword was used in a search query on the specified device type during the time period. The count aggregates data from all specified countries.
     * @var int
     */
    public $SearchCount;

    /**
     * The time period in which the count was captured. The type of aggregation (daily, weekly, or monthly) that you specify in the request determines the length of the time period. For example, if you specified weekly aggregation, the time period is a week and the date is the Sunday of the week when the count was captured.
     * @var DayMonthAndYear
     */
    public $DayMonthAndYear;
}

/**
 * Defines an object that contains the number of times the keyword was included in a search query on the specified device type. The count data is aggregated based on the aggregation level specified in the request.
 * @link http://msdn.microsoft.com/en-us/library/hh921737(v=msads.80).aspx KeywordSearchCountByDevice Data Object
 */
final class KeywordSearchCountByDevice
{
    /**
     * The keyword.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which users searched for the specified keyword.
     * @var string
     */
    public $Device;

    /**
     * An array of HistoricalSearchCountPeriodic objects that contains the number of times that the keyword was used in a search query during the aggregation time period.
     * @var HistoricalSearchCountPeriodic[]
     */
    public $HistoricalSearchCounts;
}

/**
 * Defines a key performance index object for a keyword. The object contains the historical performance statistics of the keyword for the specified match type and ad position.
 * @link http://msdn.microsoft.com/en-us/library/gg986837(v=msads.80).aspx KeywordKPI Data Object
 */
final class KeywordKPI
{
    /**
     * The match type that you specified in the request. For possible values, see the MatchType value set.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The position in the search results in which the ad appeared.
     * @var AdPosition
     */
    public $AdPosition;

    /**
     * The number of clicks that the keyword and match type generated during the specified time interval.
     * @var int
     */
    public $Clicks;

    /**
     * The number of impressions that the keyword and match type generated during the specified time interval.
     * @var int
     */
    public $Impressions;

    /**
     * The average cost per click (CPC). The average CPC is calculated by dividing the cost of all clicks by the number of clicks.
     * @var double
     */
    public $AverageCPC;

    /**
     * The click-through rate (CTR) as a percentage. The CTR is calculated by dividing the number of clicks by the number of impressions and multiplying the result by 100.
     * @var double
     */
    public $CTR;

    /**
     * The cost of using the specified keyword and match type during the specified time interval.
     * @var double
     */
    public $TotalCost;

    /**
     * The average bid of the keyword.
     * @var double
     */
    public $AverageBid;
}

/**
 * Defines an object that contains the key performance index data for the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg986820(v=msads.80).aspx KeywordHistoricalPerformance Data Object
 */
final class KeywordHistoricalPerformance
{
    /**
     * The keyword to which the keyword performance data applies.
     * @var string
     */
    public $Keyword;

    /**
     * An array of KeywordKPI objects that contains the performance data.
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}

/**
 * Defines an object that contains the key performance index data for the specified keyword and device.
 * @link http://msdn.microsoft.com/en-us/library/hh921734(v=msads.80).aspx KeywordHistoricalPerformanceByDevice Data Object
 */
final class KeywordHistoricalPerformanceByDevice
{
    /**
     * The keyword to which the keyword performance data applies.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which the user entered their search query.
     * @var string
     */
    public $Device;

    /**
     * An array of KeywordKPI objects that contains the performance data. The data is broken out by match type and ad position.
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}

/**
 * Defines an object that contains a list of suggested keywords that may perform better than the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg712233(v=msads.80).aspx KeywordSuggestion Data Object
 */
final class KeywordSuggestion
{
    /**
     * The keyword to which the suggested keywords apply.
     * @var string
     */
    public $Keyword;

    /**
     * A KeywordAndConfidence array that contains a list of suggested keywords and, for each keyword, a score that indicates the probability that using the keyword would result in an ad being included in the results of a search query.
     * @var KeywordAndConfidence[]
     */
    public $SuggestionsAndConfidence;
}

/**
 * Defines an object that contains the location and the percentage of time that a user in the specified location entered a search query with the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/hh921736(v=msads.80).aspx KeywordLocation Data Object
 */
final class KeywordLocation
{
    /**
     * The country, state, metropolitan area, or city where users searched for the specified keyword.
     * @var string
     */
    public $Location;

    /**
     * The percentage of time that users searched for the keyword from the location. The value is specified in the range 0.0 through 100.0.
     * @var double
     */
    public $Percentage;
}

/**
 * Defines an object that contains the locations where users were located when they searched for the specified keyword using the specified type of device.
 * @link http://msdn.microsoft.com/en-us/library/hh921735(v=msads.80).aspx KeywordLocationResult Data Object
 */
final class KeywordLocationResult
{
    /**
     * The keyword.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device used by the user.
     * @var string
     */
    public $Device;

    /**
     * An array of KeywordLocation objects that contains the users' geographical locations and the percentage of times that users searched for the keyword from that location.
     * @var KeywordLocation[]
     */
    public $KeywordLocations;
}

/**
 * Defines an object that contains a keyword category and a confidence score. The confidence score indicates the likelihood that the keyword belongs to the keyword category.
 * @link http://msdn.microsoft.com/en-us/library/hh921730(v=msads.80).aspx KeywordCategory Data Object
 */
final class KeywordCategory
{
    /**
     * The keyword category that the keyword might belong to.
     * @var string
     */
    public $Category;

    /**
     * A score from 0.0 to 1.0 that indicates the likelihood that the keyword belongs to the category.
     * @var double
     */
    public $ConfidenceScore;
}

/**
 * Defines an object that contains the keyword and a list of keyword categories that the keyword might belong to.
 * @link http://msdn.microsoft.com/en-us/library/hh921731(v=msads.80).aspx KeywordCategoryResult Data Object
 */
final class KeywordCategoryResult
{
    /**
     * The keyword being categorized.
     * @var string
     */
    public $Keyword;

    /**
     * An array of KeywordCategory objects that contains a keyword category and a score that indicates the confidence that the keyword belongs to that keyword category.
     * @var KeywordCategory[]
     */
    public $KeywordCategories;
}

/**
 * Defines an object that contains the age and gender of the user who entered the search query, if known.
 * @link http://msdn.microsoft.com/en-us/library/hh921729(v=msads.80).aspx KeywordDemographic Data Object
 */
final class KeywordDemographic
{
    /**
     * The percentage of time that users 18 through 24 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age18_24;

    /**
     * The percentage of time that users 25 through 34 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age25_34;

    /**
     * The percentage of time that users 35 through 49 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age35_49;

    /**
     * The percentage of time that users 50 through 64 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age50_64;

    /**
     * The percentage of time that users 65 years of age or older searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age65Plus;

    /**
     * Not used.
     * @var double
     */
    public $AgeUnknown;

    /**
     * The percentage of time that female users searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Female;

    /**
     * The percentage of time that male users searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Male;

    /**
     * Not Used.
     * @var double
     */
    public $GenderUnknown;
}

/**
 * Defines an object that contains the keyword and percentage of users by age and gender (if known) who searched for the specified keyword on the specified device.
 * @link http://msdn.microsoft.com/en-us/library/hh921732(v=msads.80).aspx KeywordDemographicResult Data Object
 */
final class KeywordDemographicResult
{
    /**
     * The keyword.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device used by the user.
     * @var string
     */
    public $Device;

    /**
     * An array of KeywordDemographic objects that contains the percentage of users by age and gender (if known) that searched for the keyword on the device.
     * @var KeywordDemographic
     */
    public $KeywordDemographics;
}

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169085(v=msads.80).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     * @var string
     */
    public $TrackingId;
}

final class GetPublisherKeywordPerformanceRequest
{
    /**
     * @var string[]
     */
    public $Keywords;

    /**
     * @var TimeInterval
     */
    public $TimeInterval;
}

final class GetPublisherKeywordPerformanceResponse
{
    public $KeywordPerformance;
}

/**
 * Suggests possible keywords for the content located at the specified URL.
 * @link http://msdn.microsoft.com/en-us/library/gg670953(v=MSADS.80).aspx SuggestKeywordsForUrlRequest Request Object
 */
final class SuggestKeywordsForUrlRequest
{
    /**
     * The URL of the webpage to scan for possible keywords. The URL can contain a maximum of 2,000 characters.
     * @var string
     */
    public $Url;

    /**
     * The language used by the website.
     * @var string
     */
    public $Language;

    /**
     * A positive integer value that specifies the maximum number of keywords to return. The maximum value that you can specify is 200.
     * @var int
     */
    public $MaxKeywords;

    /**
     * A filter value that limits the keywords that the service returns to those that have a confidence score that is greater than or equal to the specified score. For example, you can specify that you want the operation to return only keywords that have a confidence score of at least 80 percent (0.8).
     * @var double
     */
    public $MinConfidenceScore;

    /**
     * A value that determines whether the results exclude brand keywords. To exclude brand keywords in the result, set to true. The default is false.
     * @var boolean
     */
    public $ExcludeBrand;
}

/**
 * Response object for the SuggestKeywordsForUrl service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg670953(v=MSADS.80).aspx SuggestKeywordsForUrlResponse Response Object
 */
final class SuggestKeywordsForUrlResponse
{
    /**
     * An array of KeywordAndConfidence objects that contains the possible keywords found in the content of the specified URL. In addition, the object includes a score that indicates the probability that using the keyword would result in the URL being included in the results of a search query.
     * @var KeywordAndConfidence[]
     */
    public $Keywords;
}

/**
 * Gets the minimum suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate based on the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg712218(v=MSADS.80).aspx GetEstimatedBidByKeywordIdsRequest Request Object
 */
final class GetEstimatedBidByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the minimum suggested bid values that could result in your ad appearing in the targeted position in the search results. You can specify a maximum of 100 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The position in which you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;

    /**
     * Set to true if you want to get an estimated minimum bid for all requested keywords. If true, some returned elements of the EstimatedBidAndTraffic Data Object may be NULL.
     * @var boolean
     */
    public $GetIncreasedBidCoverage;
}

/**
 * Response object for the GetEstimatedBidByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712218(v=MSADS.80).aspx GetEstimatedBidByKeywordIdsResponse Response Object
 */
final class GetEstimatedBidByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedBid objects. The array contains a corresponding item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedBid[]
     */
    public $KeywordEstimatedBids;
}

/**
 * Gets the estimated position in the search results if the specified keywords use the specified bid value. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords may generate based on the specified bid value.
 * @link http://msdn.microsoft.com/en-us/library/gg712242(v=MSADS.80).aspx GetEstimatedPositionByKeywordIdsRequest Request Object
 */
final class GetEstimatedPositionByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value. You can specify a maximum of 100 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     * @var double
     */
    public $MaxBid;
}

/**
 * Response object for the GetEstimatedPositionByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712242(v=MSADS.80).aspx GetEstimatedPositionByKeywordIdsResponse Response Object
 */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}

/**
 * Gets the suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate based on the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg986836(v=MSADS.80).aspx GetEstimatedBidByKeywordsRequest Request Object
 */
final class GetEstimatedBidByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get suggested bid values. You can specify a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The position where you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for estimating the bids.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The monetary unit to use to calculate the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * An array of unique match types for which you want to get estimates.
     * @var MatchType[]
     */
    public $MatchTypes;

    /**
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data from the previous seven days is used to help determine how well the keyword might have performed in the context of the campaign.
     * @var string
     */
    public $CampaignId;

    /**
     * @var string
     */
    public $AdgroupId;

    /**
     * Set to true if you want to get an estimated minimum bid for all requested keywords. If true, some returned elements of the EstimatedBidAndTraffic Data Object may be NULL.
     * @var boolean
     */
    public $GetIncreasedBidCoverage;

    /**
     * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
     * @var int
     */
    public $GetBidsAtLevel;
}

/**
 * Response object for the GetEstimatedBidByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg986836(v=MSADS.80).aspx GetEstimatedBidByKeywordsResponse Response Object
 */
final class GetEstimatedBidByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedBid objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordEstimatedBid[]
     */
    public $KeywordEstimatedBids;

    /**
     * Contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified ad group could generate if you used the suggested bid price.
     * @var AdGroupEstimatedBid
     */
    public $AdGroupEstimatedBid;
}

/**
 * Gets the estimated position in the search results if the specified keywords use the specified bid value. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate, based on the specified bid value.
 * @link http://msdn.microsoft.com/en-us/library/gg986833(v=MSADS.80).aspx GetEstimatedPositionByKeywordsRequest Request Object
 */
final class GetEstimatedPositionByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value. You can specify a maximum of 1,000 keywords and each keyword can contains a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     * @var double
     */
    public $MaxBid;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for estimating the position.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The monetary unit to use to calculate the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * An array of unique match types for which you want to get estimates.
     * @var MatchType[]
     */
    public $MatchTypes;

    /**
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data from the previous seven days is used to help determine how well the keyword might have performed in the context of the campaign.
     * @var string
     */
    public $CampaignId;

    /**
     * @var string
     */
    public $AdgroupId;
}

/**
 * Response object for the GetEstimatedPositionByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg986833(v=MSADS.80).aspx GetEstimatedPositionByKeywordsResponse Response Object
 */
final class GetEstimatedPositionByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}

/**
 * Gets a count of the number of search queries that included the specified keywords during the specified time period.
 * @link http://msdn.microsoft.com/en-us/library/gg712217(v=MSADS.80).aspx GetHistoricalSearchCountRequest Request Object
 */
final class GetHistoricalSearchCountRequest
{
    /**
     * An array of keywords for which you want to determine the number of times that the keyword was used in a search query. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the count data.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The start date of the date range that identifies the data that you want to use to determine the historical search count.
     * @var MonthAndYear
     */
    public $StartMonthAndYear;

    /**
     * The end date of the date range that identifies the data that you want to use to determine the historical search count.
     * @var MonthAndYear
     */
    public $EndMonthAndYear;
}

/**
 * Response object for the GetHistoricalSearchCount service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712217(v=MSADS.80).aspx GetHistoricalSearchCountResponse Response Object
 */
final class GetHistoricalSearchCountResponse
{
    /**
     * An array of KeywordSearchCount objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordSearchCount[]
     */
    public $KeywordSearchCounts;
}

/**
 * Gets a count of the number of search queries that included the specified keywords. The results are broken out by device type.
 * @link http://msdn.microsoft.com/en-us/library/hh921748(v=MSADS.80).aspx GetHistoricalSearchCountByDeviceRequest Request Object
 */
final class GetHistoricalSearchCountByDeviceRequest
{
    /**
     * A list of keywords for which you want to get search count data. The data is broken out by the device type.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the count data.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The start date of the date range that identifies the poll of data that you want to use to determine the historical search count.
     * @var DayMonthAndYear
     */
    public $StartTimePeriod;

    /**
     * The end date of the date range that identifies the pool of data that you want to use to determine the historical search count.
     * @var DayMonthAndYear
     */
    public $EndTimePeriod;

    /**
     * The type of aggregation to use. For example, you can aggregate the count data by day or month. The start and end time elements specifies the pool of data to use for the aggregation.
     * @var string
     */
    public $TimePeriodRollup;

    /**
     * A list of one or more of the following device types. The default is Computers.
     * @var string[]
     */
    public $Devices;
}

/**
 * Response object for the GetHistoricalSearchCountByDevice service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921748(v=MSADS.80).aspx GetHistoricalSearchCountByDeviceResponse Response Object
 */
final class GetHistoricalSearchCountByDeviceResponse
{
    /**
     * An array of KeywordSearchCountByDevice objects. The array contains an object for each keyword and device-type combination that you specified in the request, if data is available. For more information, see Remarks.
     * @var KeywordSearchCountByDevice[]
     */
    public $KeywordSearchCounts;
}

/**
 * Gets the historical performance of one or more keywords used in search queries.
 * @link http://msdn.microsoft.com/en-us/library/gg986835(v=MSADS.80).aspx GetHistoricalKeywordPerformanceRequest Request Object
 */
final class GetHistoricalKeywordPerformanceRequest
{
    /**
     * An array of keywords for which you want to get historical performance statistics. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The time period that identifies the data to use to determine the key performance index of the specified keywords. For example, use data from the previous seven days or previous 30 days to determine the keyword performance.
     * @var TimeInterval
     */
    public $TimeInterval;

    /**
     * The position of the search results for which you want to get performance data.
     * @var AdPosition
     */
    public $TargetAdPosition;

    /**
     * The match type for which you want to get historical data.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the historical data.
     * @var string[]
     */
    public $PublisherCountries;
}

/**
 * Response object for the GetHistoricalKeywordPerformance service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg986835(v=MSADS.80).aspx GetHistoricalKeywordPerformanceResponse Response Object
 */
final class GetHistoricalKeywordPerformanceResponse
{
    /**
     * An array of KeywordHistoricalPerformance objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordHistoricalPerformance[]
     */
    public $KeywordHistoricalPerformances;
}

/**
 * Gets the historical performance of one or more keywords used in search queries. The results are broken out by device type.
 * @link http://msdn.microsoft.com/en-us/library/hh921741(v=MSADS.80).aspx GetHistoricalKeywordPerformanceByDeviceRequest Request Object
 */
final class GetHistoricalKeywordPerformanceByDeviceRequest
{
    /**
     * A list of keywords for which you want to get historical performance data. The data is broken out by the device type, match type, and target ad position.
     * @var string[]
     */
    public $Keywords;

    /**
     * The time period that identifies the pool of data to use to calculate the key performance index (KPI) of the specified keywords. For example, use data from the previous seven days or previous 30 days to calculate the KPI.
     * @var TimeInterval
     */
    public $TimeInterval;

    /**
     * The position in the search results for which you want to get performance data.
     * @var AdPosition
     */
    public $TargetAdPosition;

    /**
     * A list of one or more match types. You cannot specify the Content match type.
     * @var MatchType[]
     */
    public $MatchTypes;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the historical data.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * A list of one or more of the following device types. The default is Computers.
     * @var string[]
     */
    public $Devices;
}

/**
 * Response object for the GetHistoricalKeywordPerformanceByDevice service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921741(v=MSADS.80).aspx GetHistoricalKeywordPerformanceByDeviceResponse Response Object
 */
final class GetHistoricalKeywordPerformanceByDeviceResponse
{
    /**
     * An array of KeywordHistoricalPerformanceByDevice objects that contains the historical performance data of the keyword and device type combinations.
     * @var KeywordHistoricalPerformanceByDevice[]
     */
    public $KeywordHistoricalPerformances;
}

/**
 * Suggests keywords that may perform better than the specified keywords. The operation suggests relevant keywords that are similar in meaning and intent to the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/gg712250(v=MSADS.80).aspx SuggestKeywordsFromExistingKeywordsRequest Request Object
 */
final class SuggestKeywordsFromExistingKeywordsRequest
{
    /**
     * An array of keywords for which you want to get suggested keywords that could perform better. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keyword is written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for determining the suggested keywords.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The maximum number of keyword suggestions to return per specified keyword. If SuggestionType is set to 4, you can request a maximum of 200 suggestions per keyword; otherwise the maximum suggestions that you can request is 100.
     * @var int
     */
    public $MaxSuggestionsPerKeyword;

    /**
     * The provider to use to generate the keyword suggestions. For a list of possible providers, the language and country restrictions of each provider, and the default provider by country, see Remarks.
     * @var int
     */
    public $SuggestionType;

    /**
     * A Boolean value that determines whether to remove duplicate keywords from the list of suggested keywords. To remove duplicates, set to true. The default is false.
     * @var boolean
     */
    public $RemoveDuplicates;

    /**
     * A value that determines whether the results exclude brand keywords. To exclude brand keywords in the result, set to true. The default is false.
     * @var boolean
     */
    public $ExcludeBrand;
}

/**
 * Response object for the SuggestKeywordsFromExistingKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712250(v=MSADS.80).aspx SuggestKeywordsFromExistingKeywordsResponse Response Object
 */
final class SuggestKeywordsFromExistingKeywordsResponse
{
    /**
     * An array of KeywordSuggestion objects. The array contains an item for each keyword specified in the request. The object contains a list of suggested keywords that may perform better than the specified keyword.
     * @var KeywordSuggestion[]
     */
    public $KeywordSuggestions;
}

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/hh921764(v=MSADS.80).aspx GetKeywordLocationsRequest Request Object
 */
final class GetKeywordLocationsRequest
{
    /**
     * An array of keywords for which you want to get geographical location information. The data is broken out by device type. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country code of the country/region to use as the source of the location data.
     * @var string
     */
    public $PublisherCountry;

    /**
     * A list of one or more of the following device types.
     * @var string[]
     */
    public $Device;

    /**
     * The level at which to aggregate the geographical location data. The following are the possible values.
     * @var int
     */
    public $Level;

    /**
     * The country from which the search originated.
     * @var string
     */
    public $ParentCountry;

    /**
     * The maximum number of locations to return. You can request a maximum of 10 locations.
     * @var int
     */
    public $MaxLocations;
}

/**
 * Response object for the GetKeywordLocations service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921764(v=MSADS.80).aspx GetKeywordLocationsResponse Response Object
 */
final class GetKeywordLocationsResponse
{
    /**
     * An array of KeywordLocationResult objects. Each object contains the keyword, geographical location, and percentage of time that users in the geographical location searched for the specified keyword.
     * @var KeywordLocationResult[]
     */
    public $KeywordLocationResult;
}

/**
 * Gets the keyword categories to which the specified keywords belong.
 * @link http://msdn.microsoft.com/en-us/library/hh921752(v=MSADS.80).aspx GetKeywordCategoriesRequest Request Object
 */
final class GetKeywordCategoriesRequest
{
    /**
     * An array of keywords for which you want to determine the possible keyword categories that each keyword belongs to. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written. You must set this element to English.
     * @var string
     */
    public $Language;

    /**
     * The country code of the country/region to use as the source of the category data. You must set this element to US.
     * @var string
     */
    public $PublisherCountry;

    /**
     * The number of categories to include in the results. The maximum number of categories that you can request is 5.
     * @var int
     */
    public $MaxCategories;
}

/**
 * Response object for the GetKeywordCategories service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921752(v=MSADS.80).aspx GetKeywordCategoriesResponse Response Object
 */
final class GetKeywordCategoriesResponse
{
    /**
     * An array of KeywordCategoryResult objects. Each object contains the keyword and a list of categories to which it belongs. For more information, see Remarks.
     * @var KeywordCategoryResult[]
     */
    public $Result;
}

/**
 * Gets the age and gender of users who have searched for the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/hh921753(v=MSADS.80).aspx GetKeywordDemographicsRequest Request Object
 */
final class GetKeywordDemographicsRequest
{
    /**
     * An array of keywords for which you want to get demographics data. The data is broken out by device type. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country code of the country/region to use as the source of the demographics data.
     * @var string
     */
    public $PublisherCountry;

    /**
     * A list of one or more of the following device types.
     * @var string[]
     */
    public $Device;
}

/**
 * Response object for the GetKeywordDemographics service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921753(v=MSADS.80).aspx GetKeywordDemographicsResponse Response Object
 */
final class GetKeywordDemographicsResponse
{
    /**
     * An array of KeywordDemographicResult objects. Each object contains the keyword and the percentage of time that users of a certain age and gender searched for the specified keyword. For more information, see Remarks.
     * @var KeywordDemographicResult[]
     */
    public $KeywordDemographicResult;
}


?>
