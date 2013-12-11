<?php

namespace BingAds\CampaignManagement;

/**
 * Gets ads that are associated with an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671542(v=MSADS.80).aspx GetAdsByAdGroupIdRequest Request Object
 */
final class GetAdsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     * @var long
     */
    public $AdGroupId;
}
