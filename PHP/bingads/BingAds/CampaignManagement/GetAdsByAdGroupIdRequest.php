<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the ads that are associated with an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.90).aspx GetAdsByAdGroupIdRequest Request Object
 */
final class GetAdsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     * @var long
     */
    public $AdGroupId;
}
