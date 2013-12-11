<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the business location objects of the specified businesses.
 * @link http://msdn.microsoft.com/en-us/library/dd797150(v=MSADS.80).aspx GetBusinessesByIdsRequest Request Object
 */
final class GetBusinessesByIdsRequest
{
    /**
     * @var long[]
     */
    public $BusinessIds;
}
