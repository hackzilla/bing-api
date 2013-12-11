<?php

namespace BingAds\Bulk;

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
