<?php

namespace BingAds\Bulk;

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
