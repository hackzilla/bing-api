<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified media from an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn151767(v=MSADS.80).aspx GetMediaByIdsRequest Request Object
 */
final class GetMediaByIdsRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the media to get.
     * @var long[]
     */
    public $MediaIds;
}
