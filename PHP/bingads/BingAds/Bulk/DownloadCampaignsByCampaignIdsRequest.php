<?php

namespace BingAds\Bulk;

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
