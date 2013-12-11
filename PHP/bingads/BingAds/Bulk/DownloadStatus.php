<?php

namespace BingAds\Bulk;

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
