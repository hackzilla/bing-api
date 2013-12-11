<?php
// Generated on 10/23/2013 5:21:57 AM

namespace BingAds\AdIntelligence;

/**
 * Defines the possible time periods that determine the pool of data that the service uses to get the performance statistics of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg670967(v=msads.90).aspx TimeInterval Value Set
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

final class Scale
{
    const Minimal = 'Minimal';
    const Low = 'Low';
    const Medium = 'Medium';
    const High = 'High';
    const VeryHigh = 'VeryHigh';
}

/**
 * Defines the possible positions where you can target an ad to appear in the search results or on a content-based webpage.
 * @link http://msdn.microsoft.com/en-us/library/gg986819(v=msads.90).aspx TargetAdPosition Value Set
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
 * @link http://msdn.microsoft.com/en-us/library/gg712238(v=msads.90).aspx MatchType Value Set
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

    /** Aggregates the data across all match types. */
    const Aggregate = 'Aggregate';
}

/**
 * Defines a selection of currency values.
 * @link http://msdn.microsoft.com/en-us/library/gg712234(v=msads.90).aspx Currency Value Set
 */
final class Currency
{
    const AlgerianDinar = 'AlgerianDinar';
    const ArgentinePeso = 'ArgentinePeso';
    const ArmenianDram = 'ArmenianDram';
    const AustralianDollar = 'AustralianDollar';
    const AzerbaijanianManat = 'AzerbaijanianManat';
    const BahrainiDinar = 'BahrainiDinar';
    const Baht = 'Baht';
    const Balboa = 'Balboa';
    const BelarussianRuble = 'BelarussianRuble';
    const BelizeDollar = 'BelizeDollar';
    const Bolivar = 'Bolivar';
    const Boliviano = 'Boliviano';
    const BrazilianReal = 'BrazilianReal';
    const BruneiDollar = 'BruneiDollar';
    const CanadianDollar = 'CanadianDollar';
    const ChileanPeso = 'ChileanPeso';
    const ColombianPeso = 'ColombianPeso';
    const CordobaOro = 'CordobaOro';
    const CostaRicanColon = 'CostaRicanColon';
    const Croatiankuna = 'Croatiankuna';
    const CzechKoruna = 'CzechKoruna';
    const DanishKrone = 'DanishKrone';
    const Denar = 'Denar';
    const DominicanPeso = 'DominicanPeso';
    const Dong = 'Dong';
    const EgyptianPound = 'EgyptianPound';
    const Euro = 'Euro';
    const Forint = 'Forint';
    const Guarani = 'Guarani';
    const HongKongDollar = 'HongKongDollar';
    const Hryvnia = 'Hryvnia';
    const IcelandKrona = 'IcelandKrona';
    const IndianRupee = 'IndianRupee';
    const IranianRial = 'IranianRial';
    const IraqiDinar = 'IraqiDinar';
    const JamaicanDollar = 'JamaicanDollar';
    const JapaneseYen = 'JapaneseYen';
    const JordanianDinar = 'JordanianDinar';
    const KenyanShilling = 'KenyanShilling';
    const Kroon = 'Kroon';
    const KuwaitiDinar = 'KuwaitiDinar';
    const Lari = 'Lari';
    const LatvianLats = 'LatvianLats';
    const LebanesePound = 'LebanesePound';
    const Lek = 'Lek';
    const Lempira = 'Lempira';
    const Leu = 'Leu';
    const Lev = 'Lev';
    const LibyanDinar = 'LibyanDinar';
    const LithuanianLitus = 'LithuanianLitus';
    const MalaysianRinggit = 'MalaysianRinggit';
    const MexicanPeso = 'MexicanPeso';
    const MoroccanDirham = 'MoroccanDirham';
    const NewIsraeliSheqel = 'NewIsraeliSheqel';
    const NewTaiwanDollar = 'NewTaiwanDollar';
    const NewZealandDollar = 'NewZealandDollar';
    const NorwegianKrone = 'NorwegianKrone';
    const NuevoSol = 'NuevoSol';
    const PakistanRupee = 'PakistanRupee';
    const Pataca = 'Pataca';
    const PesoUruguayo = 'PesoUruguayo';
    const PhilippinePeso = 'PhilippinePeso';
    const QatariRial = 'QatariRial';
    const Quetzal = 'Quetzal';
    const RialOmani = 'RialOmani';
    const Rufiyaa = 'Rufiyaa';
    const Rupiah = 'Rupiah';
    const RussianRuble = 'RussianRuble';
    const SaudiRiyal = 'SaudiRiyal';
    const SingaporeDollar = 'SingaporeDollar';
    const SlovakKoruna = 'SlovakKoruna';
    const Som = 'Som';
    const SouthAfricanRand = 'SouthAfricanRand';
    const SwedishKrona = 'SwedishKrona';
    const SwissFranc = 'SwissFranc';
    const SyrianPound = 'SyrianPound';
    const Tenge = 'Tenge';
    const Tolar = 'Tolar';
    const TrinidadandTobagoDollar = 'TrinidadandTobagoDollar';
    const Tugrik = 'Tugrik';
    const TunisianDinar = 'TunisianDinar';
    const TurkishLira = 'TurkishLira';
    const UAEDirham = 'UAEDirham';
    const UKPound = 'UKPound';
    const USDollar = 'USDollar';
    const UzbekistanSum = 'UzbekistanSum';
    const Won = 'Won';
    const YemeniRial = 'YemeniRial';
    const YuanRenminbi = 'YuanRenminbi';
    const YugoslavianNewDinar = 'YugoslavianNewDinar';
    const ZimbabweDollar = 'ZimbabweDollar';
    const Zloty = 'Zloty';
}

/**
 * Defines the possible positions of an ad in the search results or on a content-based webpage.
 * @link http://msdn.microsoft.com/en-us/library/gg712236(v=msads.90).aspx AdPosition Value Set
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

    /** Aggregates the data for all supported positions. */
    const Aggregate = 'Aggregate';
}

final class AdGroupBidLandscapeType
{
    const Uniform = 'Uniform';
    const DefaultBidOnly = 'DefaultBidOnly';
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169086(v=msads.90).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169085(v=msads.90).aspx ApplicationFault Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169084(v=msads.90).aspx AdApiFaultDetail Data Object
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     * @var AdApiError[]
     */
    public $Errors;
}

final class AdGroupBidLandscape
{
    /**
     * @var long
     */
    public $AdGroupId;

    public $AdGroupBidLandscapeType;

    /**
     * @var DayMonthAndYear
     */
    public $StartDate;

    /**
     * @var DayMonthAndYear
     */
    public $EndDate;

    public $BidLandscapePoints;
}

final class AdGroupBidLandscapeInput
{
    public $AdGroupBidLandscapeType;
    /**
     * @var long
     */
    public $AdGroupId;
}

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group given the suggested bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn144841(v=msads.90).aspx AdGroupEstimatedBid Data Object
 */
final class AdGroupEstimatedBid
{
    /**
     * The estimated minimum number of clicks per week.
     * @var double
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks per week.
     * @var double
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC.
     * @var decimal
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions per week.
     * @var long
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions per week.
     * @var long
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum cost per week.
     * @var decimal
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum cost per week.
     * @var decimal
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * The estimated ad group level default bid value.
     * @var double
     */
    public $EstimatedAdGroupBid;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169087(v=msads.90).aspx ApiFaultDetail Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169090(v=msads.90).aspx BatchError Data Object
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

final class BidLandscapePoint
{
    /**
     * @var double
     */
    public $Bid;

    /**
     * @var double
     */
    public $Clicks;

    /**
     * @var long
     */
    public $Impressions;

    /**
     * @var long
     */
    public $MLImpressions;

    /**
     * @var Currency
     */
    public $Currency;

    /**
     * @var double
     */
    public $Cost;

    /**
     * @var int
     */
    public $PointType;

    /**
     * @var double
     */
    public $MarginalCPC;
}

/**
 * Defines an object that you use to specify the start and end dates of a date range.
 * @link http://msdn.microsoft.com/en-us/library/hh921738(v=msads.90).aspx DayMonthAndYear Data Object
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
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the suggested bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986821(v=msads.90).aspx EstimatedBidAndTraffic Data Object
 */
final class EstimatedBidAndTraffic
{
    /**
     * The keyword match type used to determine the estimates.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks per week.
     * @var double
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks per week.
     * @var double
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions per week.
     * @var long
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions per week.
     * @var long
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum cost per week.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum cost per week.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * The suggested bid value.
     * @var double
     */
    public $EstimatedMinBid;
}

/**
 * Defines an object that contains the estimated search results position and estimated keyword statistics such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the specified bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986823(v=msads.90).aspx EstimatedPositionAndTraffic Data Object
 */
final class EstimatedPositionAndTraffic
{
    /**
     * The keyword match type used to determine the estimates.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks per week.
     * @var double
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks per week.
     * @var double
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions per week.
     * @var long
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions per week.
     * @var long
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum cost per week.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum cost per week.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost values, such as AverageCPC.
     * @var Currency
     */
    public $Currency;

    /**
     * The position in the search results given the specified bid.
     * @var double
     */
    public $EstimatedAdPosition;
}

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
 * @link http://msdn.microsoft.com/en-us/library/hh921728(v=msads.90).aspx HistoricalSearchCountPeriodic Data Object
 */
final class HistoricalSearchCountPeriodic
{
    /**
     * The number of times that the keyword was used in a search query on the specified device type during the time period. The count aggregates data from all specified countries.
     * @var long
     */
    public $SearchCount;

    /**
     * The time period in which the count was captured. The type of aggregation (daily, weekly, or monthly) that you specify in the request determines the length of the time period. For example, if you specified weekly aggregation, the time period is a week and the date is the Sunday of the week when the count was captured.
     * @var DayMonthAndYear
     */
    public $DayMonthAndYear;
}

/**
 * Defines an object that contains a suggested keyword and a confidence score. The confidence score indicates the probability that the keyword would match a user's search query.
 * @link http://msdn.microsoft.com/en-us/library/gg670952(v=msads.90).aspx KeywordAndConfidence Data Object
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
 * Defines an object that contains a keyword and corresponding match types.
 * @link http://msdn.microsoft.com/en-us/library/dn320461(v=msads.90).aspx KeywordAndMatchType Data Object
 */
final class KeywordAndMatchType
{
    /**
     * The keyword text.
     * @var string
     */
    public $KeywordText;

    /**
     * The corresponding match types for the keyword.
     * @var MatchType[]
     */
    public $MatchTypes;
}

final class KeywordBidLandscape
{
    /**
     * @var long
     */
    public $KeywordId;

    /**
     * @var DayMonthAndYear
     */
    public $StartDate;

    /**
     * @var DayMonthAndYear
     */
    public $EndDate;

    public $BidLandscapePoints;
}

/**
 * Defines an object that contains a keyword category and a confidence score. The confidence score indicates the likelihood that the keyword belongs to the keyword category.
 * @link http://msdn.microsoft.com/en-us/library/hh921730(v=msads.90).aspx KeywordCategory Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh921731(v=msads.90).aspx KeywordCategoryResult Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh921729(v=msads.90).aspx KeywordDemographic Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh921732(v=msads.90).aspx KeywordDemographicResult Data Object
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
 * Defines an object that contains the keyword and the estimated bid value for each match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986832(v=msads.90).aspx KeywordEstimatedBid Data Object
 */
final class KeywordEstimatedBid
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * A list of EstimatedBidAndTraffic objects that contains the suggested bid value for the keyword and match type. If there is data available for the keyword, the EstimatedBidAndTraffic object will provide an estimated bid value. Otherwise, if no data is available the EstimatedBids element will be null.
     * @var EstimatedBidAndTraffic[]
     */
    public $EstimatedBids;
}

/**
 * Defines an object that contains the keyword and the estimated position in the search results for each match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986826(v=msads.90).aspx KeywordEstimatedPosition Data Object
 */
final class KeywordEstimatedPosition
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * An array of EstimatedPositionAndTraffic objects that contains the position in the search results corresponding to the specified maximum bid.
     * @var EstimatedPositionAndTraffic[]
     */
    public $EstimatedPositions;
}

/**
 * Defines an object that contains the key performance index data for the specified keyword and device.
 * @link http://msdn.microsoft.com/en-us/library/gg986820(v=msads.90).aspx KeywordHistoricalPerformance Data Object
 */
final class KeywordHistoricalPerformance
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
     * An array of KeywordKPI objects that contains the performance data.
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}

/**
 * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986827(v=msads.90).aspx KeywordIdEstimatedBid Data Object
 */
final class KeywordIdEstimatedBid
{
    /**
     * The identifier of the keyword to which the suggested bid applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and the suggested bid value for each match type.
     * @var KeywordEstimatedBid
     */
    public $KeywordEstimatedBid;
}

/**
 * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986824(v=msads.90).aspx KeywordIdEstimatedPosition Data Object
 */
final class KeywordIdEstimatedPosition
{
    /**
     * The identifier of the keyword to which the estimated position applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and estimated position in the search results given the specified maximum bid.
     * @var KeywordEstimatedPosition
     */
    public $KeywordEstimatedPosition;
}

/**
 * Defines a key performance index object for a keyword. The object contains the historical performance statistics of the keyword for the specified match type and ad position.
 * @link http://msdn.microsoft.com/en-us/library/gg986837(v=msads.90).aspx KeywordKPI Data Object
 */
final class KeywordKPI
{
    /**
     * The match type that you specified in the request.
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
     * @var long
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
 * Defines an object that contains the location and the percentage of time that a user in the specified location entered a search query with the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/hh921736(v=msads.90).aspx KeywordLocation Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/hh921735(v=msads.90).aspx KeywordLocationResult Data Object
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

    public $Impressions;

    public $BidDensity;
}

/**
 * Defines an object that contains the number of times the keyword was included in a search query on the specified device type. The count data is aggregated based on the aggregation level specified in the request.
 * @link http://msdn.microsoft.com/en-us/library/gg712245(v=msads.90).aspx KeywordSearchCount Data Object
 */
final class KeywordSearchCount
{
    /**
     * The keyword to which the search count data applies.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which users searched for the specified keyword.
     * @var string
     */
    public $Device;

    /**
     * An array of HistoricalSearchCountPeriodic objects that contain a count of the number of times that the keyword was used in a search query. The array contains an item for each month in the specified date range. The items are ordered by calendar month.
     * @var HistoricalSearchCountPeriodic[]
     */
    public $HistoricalSearchCounts;
}

/**
 * Defines an object that contains a list of suggested keywords that may perform better than the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg712233(v=msads.90).aspx KeywordSuggestion Data Object
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169088(v=msads.90).aspx OperationError Data Object
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
 * Suggests the possible keywords for the content located at the specified URL.
 * @link http://msdn.microsoft.com/en-us/library/dn336991(v=msads.90).aspx SuggestKeywordsForUrlRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336991(v=msads.90).aspx SuggestKeywordsForUrlResponse Response Object
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
 * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could have generated with the estimated bid.The estimates are based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336995(v=msads.90).aspx GetEstimatedBidByKeywordIdsRequest Request Object
 */
final class GetEstimatedBidByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the suggested bid values that could have resulted in your ad appearing in the targeted position in the search results. You may specify a maximum of 1,000 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The position in which you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;
}

/**
 * Response object for the GetEstimatedBidByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336995(v=msads.90).aspx GetEstimatedBidByKeywordIdsResponse Response Object
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
 * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could have generated with the estimated bid.The estimates are based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIdsRequest Request Object
 */
final class GetEstimatedPositionByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value. You may specify a maximum of 1,000 keyword identifiers.
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
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIdsResponse Response Object
 */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * A list of KeywordIdEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}

/**
 * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywordsRequest Request Object
 */
final class GetEstimatedBidByKeywordsRequest
{
    /**
     * A list of KeywordAndMatchType objects for which you want to get suggested bid values. You may specify a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var KeywordAndMatchType[]
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
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data is used to help determine how well the keyword might perform in the context of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * @var long
     */
    public $AdgroupId;

    /**
     * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
     * @var int
     */
    public $GetBidsAtLevel;
}

/**
 * Response object for the GetEstimatedBidByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywordsResponse Response Object
 */
final class GetEstimatedBidByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedBid objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordEstimatedBid[]
     */
    public $KeywordEstimatedBids;

    /**
     * Contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group if you would use the suggested bid.
     * @var AdGroupEstimatedBid
     */
    public $AdGroupEstimatedBid;
}

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could be generated with the estimated bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn337006(v=msads.90).aspx GetEstimatedPositionByKeywordsRequest Request Object
 */
final class GetEstimatedPositionByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value. You may specify a maximum of 1,000 keywords and each keyword can contains a maximum of 100 characters.
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
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data is used to help determine how well the keyword might perform in the context of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * @var long
     */
    public $AdgroupId;
}

/**
 * Response object for the GetEstimatedPositionByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn337006(v=msads.90).aspx GetEstimatedPositionByKeywordsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336988(v=msads.90).aspx GetHistoricalSearchCountRequest Request Object
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
     * @var DayMonthAndYear
     */
    public $StartDate;

    /**
     * The end date of the date range that identifies the data that you want to use to determine the historical search count.
     * @var DayMonthAndYear
     */
    public $EndDate;

    /**
     * You may specify the time period roll up.
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
 * Response object for the GetHistoricalSearchCount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336988(v=msads.90).aspx GetHistoricalSearchCountResponse Response Object
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
 * Gets the historical performance of one or more keywords used in search queries. The results are broken out by device type.
 * @link http://msdn.microsoft.com/en-us/library/dn336996(v=msads.90).aspx GetHistoricalKeywordPerformanceRequest Request Object
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
     * The match types for which you want to get historical data.
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
 * Response object for the GetHistoricalKeywordPerformance service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336996(v=msads.90).aspx GetHistoricalKeywordPerformanceResponse Response Object
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
 * Suggests keywords that could perform better than the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/dn336990(v=msads.90).aspx SuggestKeywordsFromExistingKeywordsRequest Request Object
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

    /**
     * The identifier of the ad group for suggested keywords.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign for suggested keywords.
     * @var long
     */
    public $CampaignId;
}

/**
 * Response object for the SuggestKeywordsFromExistingKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336990(v=msads.90).aspx SuggestKeywordsFromExistingKeywordsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336993(v=msads.90).aspx GetKeywordLocationsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336993(v=msads.90).aspx GetKeywordLocationsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336992(v=msads.90).aspx GetKeywordCategoriesRequest Request Object
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
     * The country code of the country/region to use as the source of the category data.
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
 * @link http://msdn.microsoft.com/en-us/library/dn336992(v=msads.90).aspx GetKeywordCategoriesResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336994(v=msads.90).aspx GetKeywordDemographicsRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn336994(v=msads.90).aspx GetKeywordDemographicsResponse Response Object
 */
final class GetKeywordDemographicsResponse
{
    /**
     * An array of KeywordDemographicResult objects. Each object contains the keyword and the percentage of time that users of a certain age and gender searched for the specified keyword.
     * @var KeywordDemographicResult[]
     */
    public $KeywordDemographicResult;
}

final class GetKeywordBidLandscapeRequest
{
    /**
     * @var long[]
     */
    public $KeywordIds;
}

final class GetKeywordBidLandscapeResponse
{
    public $BidLandscape;
}

final class GetAdGroupBidLandscapeRequest
{
    public $AdGroupBidLandscapeInputs;
}

final class GetAdGroupBidLandscapeResponse
{
    public $BidLandscape;
}


?>
