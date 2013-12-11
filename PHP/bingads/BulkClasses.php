<?php
// Generated on 10/23/2013 5:21:58 AM

namespace BingAds\Bulk;

/**
 * Defines the scope or types of data to download.
 * @link http://msdn.microsoft.com/en-us/library/dn249976(v=msads.90).aspx DataScope Value Set
 */
final class DataScope
{
    /** Download the entity attributes data. */
    const EntityData = 'EntityData';

    /** Download the performance data. */
    const EntityPerformanceData = 'EntityPerformanceData';

    /** Download the quality score data. */
    const QualityScoreData = 'QualityScoreData';

    /** Download the bid suggestions data. */
    const BidSuggestionsData = 'BidSuggestionsData';
}

/**
 * Defines the file formats for a download request.
 * @link http://msdn.microsoft.com/en-us/library/jj919219(v=msads.90).aspx DownloadFileType Value Set
 */
final class DownloadFileType
{
    /** The file format is comma separated values (CSV). */
    const Csv = 'Csv';

    /** The file format is tab separated values (TSV). */
    const Tsv = 'Tsv';
}

/**
 * Defines the entities that may be downloaded in bulk.
 * @link http://msdn.microsoft.com/en-us/library/dn249982(v=msads.90).aspx BulkDownloadEntity Value Set
 */
final class BulkDownloadEntity
{
    /** Include campaigns in the download data. */
    const Campaigns = 'Campaigns';

    /** Include ad groups in the download data. */
    const AdGroups = 'AdGroups';

    /** Include ads in the download data. */
    const Ads = 'Ads';

    /** Include keywords in the download data. */
    const Keywords = 'Keywords';

    /** Include a campaign's negative keywords in the download data. */
    const CampaignNegativeKeywords = 'CampaignNegativeKeywords';

    /** Include an ad group's negative keywords in the download data. */
    const AdGroupNegativeKeywords = 'AdGroupNegativeKeywords';

    /** Include a campaign's targets in the download data. */
    const CampaignTargets = 'CampaignTargets';

    /** Include an ad group's targets in the download data. */
    const AdGroupTargets = 'AdGroupTargets';

    /** Include a campaign's negative site URLs in the download data. */
    const CampaignNegativeSites = 'CampaignNegativeSites';

    /** Include an ad group's negative site URLs in the download data. */
    const AdGroupNegativeSites = 'AdGroupNegativeSites';

    /** Include site links ad extensions in the download data. Only site links that are associated with a campaign are included in the download. */
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';

    /** Includes a campaign's product ad extensions in the download data. */
    const CampaignProductAdExtensions = 'CampaignProductAdExtensions';

    /** Include location extensions in the download data. */
    const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';

    /** Include call extensions in the download data. */
    const CampaignCallAdExtensions = 'CampaignCallAdExtensions';

    /** Include an ad group's product targets in the download data. */
    const AdGroupProductTargets = 'AdGroupProductTargets';

    /** Include site links ad extensions in the download data. Only site links that are associated with an ad group are included in the download. */
    const AdGroupSiteLinksAdExtensions = 'AdGroupSiteLinksAdExtensions';
}

/**
 * Defines the date range values for the requested performance data in a bulk download.
 * @link http://msdn.microsoft.com/en-us/library/dn249977(v=msads.90).aspx ReportTimePeriod Value Set
 */
final class ReportTimePeriod
{
    /** Performance data for the current day. */
    const Today = 'Today';

    /** Performance data for the previous day. */
    const Yesterday = 'Yesterday';

    /** Performance data for the previous seven days, one row for each day. */
    const LastSevenDays = 'LastSevenDays';

    /** Performance data for the current calendar week. */
    const ThisWeek = 'ThisWeek';

    /** Performance data for the previous calendar week. */
    const LastWeek = 'LastWeek';

    /** Performance data for the four calendar weeks prior to today. */
    const LastFourWeeks = 'LastFourWeeks';

    /** Performance data for the current calendar month. */
    const ThisMonth = 'ThisMonth';

    /** Performance data for the previous calendar month. */
    const LastMonth = 'LastMonth';

    /** Performance data for the previous three calendar months. */
    const LastThreeMonths = 'LastThreeMonths';

    /** Performance data for the previous six calendar months. */
    const LastSixMonths = 'LastSixMonths';

    /** Performance data for the current calendar year. */
    const ThisYear = 'ThisYear';

    /** Performance data for the previous calendar year. */
    const LastYear = 'LastYear';
}

/**
 * Defines elements to specify whether the bulk service should return upload errors with their corresponding data.
 * @link http://msdn.microsoft.com/en-us/library/dn249983(v=msads.90).aspx ResponseMode Value Set
 */
final class ResponseMode
{
    /** Return errors only in the bulk upload response file. */
    const ErrorsOnly = 'ErrorsOnly';

    /** Return errors and results in the bulk upload response file. */
    const ErrorsAndResults = 'ErrorsAndResults';
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169097(v=msads.90).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169093(v=msads.90).aspx ApplicationFault Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169095(v=msads.90).aspx AdApiFaultDetail Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169094(v=msads.90).aspx ApiFaultDetail Data Object
 */
final class ApiFaultDetail extends ApplicationFault
{
    /**
     * An array of batch error objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of operation error objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169096(v=msads.90).aspx BatchError Data Object
 */
class BatchError
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

    /**
     * Reserved for future use.
     * @var string
     */
    public $Type;
}

/**
 * Defines an object that identifies a campaign to download.
 * @link http://msdn.microsoft.com/en-us/library/jj134990(v=msads.90).aspx CampaignScope Data Object
 */
final class CampaignScope
{
    /**
     * The identifier of the campaign to download.
     * @var long
     */
    public $CampaignId;

    /**
     * The identifier of the account that owns the campaign to download.
     * @var long
     */
    public $ParentAccountId;
}

/**
 * Defines a calendar date by month, day, and year.
 * @link http://msdn.microsoft.com/en-us/library/jj134989(v=msads.90).aspx Date Data Object
 */
final class Date
{
    /**
     * Specifies the day of the month.
     * @var int
     */
    public $Day;

    /**
     * Specifies the month.
     * @var int
     */
    public $Month;

    /**
     * Specifies the year.
     * @var int
     */
    public $Year;
}

/**
 * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/dn249981(v=msads.90).aspx EditorialError Data Object
 */
final class EditorialError extends BatchError
{
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $Appealable;

    /**
     * The text that caused the entity to be disapproved.
     * @var string
     */
    public $DisapprovedText;

    /**
     * The element or property of the entity that caused the entity to be disapproved.
     * @var string
     */
    public $Location;

    /**
     * The corresponding country or region for the flagged editorial issue.
     * @var string
     */
    public $PublisherCountry;

    /**
     * A numeric code that identifies the error. For more information, see Bing Ads Editorial Failure Reason Codes.
     * @var int
     */
    public $ReasonCode;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169098(v=msads.90).aspx OperationError Data Object
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
 * Defines the date range values for the requested performance data in a bulk download.
 * @link http://msdn.microsoft.com/en-us/library/dn249975(v=msads.90).aspx PerformanceStatsDateRange Data Object
 */
final class PerformanceStatsDateRange
{
    /**
     * The end date of the custom date range. The end date cannot be later than today's date.
     * @var Date
     */
    public $CustomDateRangeEnd;

    /**
     * The start date of the custom date range. The start date must be earlier than or the same as the end date.
     * @var Date
     */
    public $CustomDateRangeStart;

    /**
     * A predefined date range value.
     * @var ReportTimePeriod
     */
    public $PredefinedTime;
}

/**
 * Downloads an account's campaign data. You can request all campaign data or only the data that has changed since the last time you downloaded the account.
 * @link http://msdn.microsoft.com/en-us/library/jj885755(v=msads.90).aspx DownloadCampaignsByAccountIdsRequest Request Object
 */
final class DownloadCampaignsByAccountIdsRequest
{
    /**
     * The identifier of the account that contains the campaign data to download. The maximum number of accounts that you can specify is one.
     * @var long[]
     */
    public $AccountIds;

    /**
     * You may include performance data such as spend, in addition to entity data such as campaign settings. The default is EntityData which will exclude performance data from the download.
     * @var DataScope
     */
    public $DataScope;

    /**
     * The format of the download file. For possible values, see DownloadFileType. The default is CSV.
     * @var DownloadFileType
     */
    public $DownloadFileType;

    /**
     * The entities to include in the download. For a list of entities that you can download, see the BulkDownloadEntity value set.
     * @var BulkDownloadEntity
     */
    public $Entities;

    /**
     * The last time that you requested a download. The date and time is expressed in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastSyncTimeInUTC;

    /**
     * The version of the location codes to return if the target contains location targets. You should set this element if you set AdditionalEntities to CampaignTargets or AdGroupTargets.
     * @var string
     */
    public $LocationTargetVersion;

    /**
     * Defines the start and end date when downloading performance data.
     * @var PerformanceStatsDateRange
     */
    public $PerformanceStatsDateRange;
}

/**
 * Response object for the DownloadCampaignsByAccountIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885755(v=msads.90).aspx DownloadCampaignsByAccountIdsResponse Response Object
 */
final class DownloadCampaignsByAccountIdsResponse
{
    /**
     * The identifier of the download request. You use the identifier to call the GetDownloadStatus operation to check the status of the download. The identifier is valid for a maximum of five days.
     * @var string
     */
    public $DownloadRequestId;
}

/**
 * Downloads the specified campaigns' data. You can request all campaign data or only the data that has changed since the last time you downloaded the campaign.
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.90).aspx DownloadCampaignsByCampaignIdsRequest Request Object
 */
final class DownloadCampaignsByCampaignIdsRequest
{
    /**
     * The campaigns to download. You can specify a maximum of 1,000 campaigns. The campaigns that you specify must belong to the same account.
     * @var CampaignScope[]
     */
    public $Campaigns;

    /**
     * You may include performance data such as spend, in addition to entity data such as campaign settings. The default is EntityData which will exclude performance data from the download.
     * @var DataScope
     */
    public $DataScope;

    /**
     * The format of the download file. For possible values, see DownloadFileType. The default is CSV.
     * @var DownloadFileType
     */
    public $DownloadFileType;

    /**
     * The entities to include in the download. For a list of entities that you can download, see the BulkDownloadEntity value set.
     * @var BulkDownloadEntity
     */
    public $Entities;

    /**
     * The last time that you requested a download. The date and time is expressed in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastSyncTimeInUTC;

    /**
     * The version of the location codes to return if the target contains location targets. You should set this element if you set AdditionalEntities to CampaignTargets or AdGroupTargets.
     * @var string
     */
    public $LocationTargetVersion;

    /**
     * Defines the start and end date when downloading performance data.
     * @var PerformanceStatsDateRange
     */
    public $PerformanceStatsDateRange;
}

/**
 * Response object for the DownloadCampaignsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.90).aspx DownloadCampaignsByCampaignIdsResponse Response Object
 */
final class DownloadCampaignsByCampaignIdsResponse
{
    /**
     * The identifier of the download request. You use the identifier to call the GetDownloadStatus operation to check the status of the download. The identifier is valid for a maximum of five days.
     * @var string
     */
    public $DownloadRequestId;
}

/**
 * Gets the status of a bulk download request.
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.90).aspx GetDownloadStatusRequest Request Object
 */
final class GetDownloadStatusRequest
{
    /**
     * The identifier of the download request.
     * @var string
     */
    public $DownloadRequestId;
}

/**
 * Response object for the GetDownloadStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.90).aspx GetDownloadStatusResponse Response Object
 */
final class GetDownloadStatusResponse
{
    /**
     * The URL that contains the download data. This element contains the URL when the Status element is Success.
     * @var string
     */
    public $DownloadUrl;

    /**
     * The status of the download. The possible values are as follows.
     * @var string
     */
    public $RequestStatus;
}

/**
 * Submits a request for a URL where a bulk upload file may be posted.
 * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.90).aspx GetBulkUploadUrlRequest Request Object
 */
final class GetBulkUploadUrlRequest
{
    /**
     * Specify whether to return errors and their corresponding data, or only the errors in the results file. The default is ErrorsOnly.
     * @var ResponseMode
     */
    public $ResponseMode;

    /**
     * The account identifier corresponding to the data that will be uploaded.
     * @var long
     */
    public $AccountId;
}

/**
 * Response object for the GetBulkUploadUrl service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.90).aspx GetBulkUploadUrlResponse Response Object
 */
final class GetBulkUploadUrlResponse
{
    /**
     * The identifier of the upload request.
     * @var string
     */
    public $RequestId;

    /**
     * The URL where you may submit your bulk upload file with HTTP POST. For more information, see Bulk Upload.
     * @var string
     */
    public $UploadUrl;
}

/**
 * Gets the status of a bulk upload request.
 * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.90).aspx GetBulkUploadStatusRequest Request Object
 */
final class GetBulkUploadStatusRequest
{
    /**
     * The identifier of the upload request.
     * @var string
     */
    public $RequestId;
}

/**
 * Response object for the GetBulkUploadStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.90).aspx GetBulkUploadStatusResponse Response Object
 */
final class GetBulkUploadStatusResponse
{
    /**
     * The status of the upload. The following are the possible returned status values.
     * @var string
     */
    public $RequestStatus;

    /**
     * The URL of the file that contains the requested results, for example upload error information.
     * @var string
     */
    public $ResultFileUrl;
}


?>
