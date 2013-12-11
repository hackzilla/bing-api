<?php

namespace BingAds\Bulk;

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
