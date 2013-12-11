<?php

namespace BingAds\Bulk;

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
