<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ads that belong to the specified ad group and have the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dd797118(v=MSADS.80).aspx GetAdsByEditorialStatusRequest Request Object
 */
final class GetAdsByEditorialStatusRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     * @var long
     */
    public $AdGroupId;

    /**
     * The AdEditorialStatus value that specifies the review status that the ads must have to be returned.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;
}
