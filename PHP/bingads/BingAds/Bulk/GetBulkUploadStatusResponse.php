<?php

namespace BingAds\Bulk;

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
