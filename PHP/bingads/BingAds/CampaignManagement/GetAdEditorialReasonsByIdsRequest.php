<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified ads failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/ff728460(v=MSADS.80).aspx GetAdEditorialReasonsByIdsRequest Request Object
 */
final class GetAdEditorialReasonsByIdsRequest
{
    /**
     * An array of identifiers of the ads that failed editorial review. The array is can have a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $AdIds;

    /**
     * The identifier of the account that contains the ads.
     * @var long
     */
    public $AccountId;
}
