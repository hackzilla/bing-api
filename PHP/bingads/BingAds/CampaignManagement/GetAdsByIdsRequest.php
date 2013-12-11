<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified ads from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671475(v=MSADS.80).aspx GetAdsByIdsRequest Request Object
 */
final class GetAdsByIdsRequest
{
    /**
     * The identifier of the ad group that contains the ads to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 20 identifiers of the ads to get.
     * @var long[]
     */
    public $AdIds;
}
