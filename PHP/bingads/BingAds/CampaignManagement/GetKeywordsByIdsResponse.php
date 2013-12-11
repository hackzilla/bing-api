<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetKeywordsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.90).aspx GetKeywordsByIdsResponse Response Object
 */
final class GetKeywordsByIdsResponse
{
    /**
     * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request. If a keyword does not exist, the corresponding element of the array is set to NULL.
     * @var Keyword[]
     */
    public $Keywords;

    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully retrieved.
     * @var BatchError[]
     */
    public $PartialErrors;
}
