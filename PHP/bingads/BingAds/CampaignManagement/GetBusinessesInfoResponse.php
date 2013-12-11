<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetBusinessesInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796964(v=MSADS.80).aspx GetBusinessesInfoResponse Response Object
 */
final class GetBusinessesInfoResponse
{
    /**
     * An array of BusinessInfo objects that were retrieved. The objects are in order of ID.
     * @var BusinessInfo[]
     */
    public $BusinessesInfo;
}
