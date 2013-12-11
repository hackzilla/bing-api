<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetBusinessesByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797150(v=MSADS.80).aspx GetBusinessesByIdsResponse Response Object
 */
final class GetBusinessesByIdsResponse
{
    /**
     * An array of Business objects that were retrieved.
     * @var Business[]
     */
    public $Businesses;
}
