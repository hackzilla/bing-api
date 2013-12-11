<?php

namespace BingAds\Bulk;

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
