<?php

namespace BingAds\Bulk;

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
