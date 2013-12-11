<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddBusinesses service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797197(v=MSADS.80).aspx AddBusinessesResponse Response Object
 */
final class AddBusinessesResponse
{
    /**
     * An array of identifiers of the businesses that were added. The order of the identifiers is the same as that of the businesses in the request.
     * @var long[]
     */
    public $BusinessIds;
}
