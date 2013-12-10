<?php
// Generated on 8/9/2013 5:26:28 AM

namespace BingAds\Bulk;

/**
 * Defines the additional entities that you can include in bulk service requests.
 * @link http://msdn.microsoft.com/en-us/library/jj134986(v=msads.80).aspx AdditionalEntity Value Set
 */
final class AdditionalEntity
{
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

    /** Include the editorial rejection reasons of an ad in the download data. */
    const AdEditorialRejectionReasons = 'AdEditorialRejectionReasons';

    /** Include the editorial rejection reasons of a keyword in the download data. */
    const KeywordEditorialRejectionReasons = 'KeywordEditorialRejectionReasons';

    /** Include site links ad extensions in the download data. Only site links that are associated with a campaign are included in the download. */
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';

    /** Include a campaign's product ad extensions in the download data. */
    const CampaignProductAdExtensions = 'CampaignProductAdExtensions';

    /** Include location extensions in the download data. */
    const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';

    /** Include call extensions in the download data. */
    const CampaignCallAdExtensions = 'CampaignCallAdExtensions';

    /** Include an ad group's product targets in the download data. */
    const AdGroupProductTargets = 'AdGroupProductTargets';

    /** Reserved for future use. */
    const ProductTargetEditorialRejectionReasons = 'ProductTargetEditorialRejectionReasons';
}

/**
 * Defines the file formats for a download request.
 * @link http://msdn.microsoft.com/en-us/library/jj919219(v=msads.80).aspx DownloadFileType Value Set
 */
final class DownloadFileType
{
    /** The file format is XML. For a description of the XML, see Bulk Service Schema. */
    const Xml = 'Xml';

    /** Not supported. */
    const Csv = 'Csv';
}

/**
 * Defines the possible status values of a bulk download request.
 * @link http://msdn.microsoft.com/en-us/library/jj134989(v=msads.80).aspx DownloadStatus Value Set
 */
final class DownloadStatus
{
    /** The download is in progress. */
    const InProgress = 'InProgress';

    /** Not supported. */
    const Failed = 'Failed';

    /** The download completed successfully. */
    const Success = 'Success';

    /** Not supported. */
    const PartialSuccess = 'PartialSuccess';
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169097(v=msads.80).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169095(v=msads.80).aspx AdApiFaultDetail Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169096(v=msads.80).aspx BatchError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169098(v=msads.80).aspx OperationError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169094(v=msads.80).aspx ApiFaultDetail Data Object
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
 * Defines an object that identifies a campaign to download.
 * @link http://msdn.microsoft.com/en-us/library/jj134990(v=msads.80).aspx CampaignScope Data Object
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
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169093(v=msads.80).aspx ApplicationFault Data Object
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
 * Downloads an account's campaign data. You can request all campaign data or only the data that has changed since the last time you downloaded the account.
 * @link http://msdn.microsoft.com/en-us/library/jj885755(v=msads.80).aspx DownloadCampaignsByAccountIdsRequest Request Object
 */
final class DownloadCampaignsByAccountIdsRequest
{
    /**
     * The identifier of the account that contains the campaign data to download. The maximum number of accounts that you can specify is one.
     * @var long[]
     */
    public $AccountIds;

    /**
     * The additional entities to include in the download. By default, campaign and ad group data does not include entities such as targets and negative keywords. For a list of additional entities that you can download, see the AdditionalEntity value set.
     * @var AdditionalEntity
     */
    public $AdditionalEntities;

    /**
     * The format of the download file. For possible values, see DownloadFileType. The default is XML.
     * @var DownloadFileType
     */
    public $DownloadFileType;

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
}

/**
 * Response object for the DownloadCampaignsByAccountIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885755(v=msads.80).aspx DownloadCampaignsByAccountIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.80).aspx DownloadCampaignsByCampaignIdsRequest Request Object
 */
final class DownloadCampaignsByCampaignIdsRequest
{
    /**
     * The additional entities to include in the download. By default, campaign and ad group data does not include entities such as targets and negative keywords. For a list of additional entities that you can download, see the AdditionalEntity value set.
     * @var AdditionalEntity
     */
    public $AdditionalEntities;

    /**
     * The campaigns to download. You can specify a maximum of 1,000 campaigns. The campaigns that you specify must belong to the same account.
     * @var CampaignScope[]
     */
    public $Campaigns;

    /**
     * The format of the download file. For possible values, see DownloadFileType. The default is XML.
     * @var DownloadFileType
     */
    public $DownloadFileType;

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
}

/**
 * Response object for the DownloadCampaignsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.80).aspx DownloadCampaignsByCampaignIdsResponse Response Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.80).aspx GetDownloadStatusRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.80).aspx GetDownloadStatusResponse Response Object
 */
final class GetDownloadStatusResponse
{
    /**
     * The URL that contains the download data. This element contains the URL when the Status element is Success.
     * @var string
     */
    public $DownloadUrl;

    /**
     * The status of the download. For possible values, see the DownloadStatus value set.
     * @var DownloadStatus
     */
    public $Status;
}


?>
