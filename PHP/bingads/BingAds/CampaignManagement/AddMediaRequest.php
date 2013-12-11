<?php

namespace BingAds\CampaignManagement;

/**
 * Adds the specified media to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn151761(v=MSADS.80).aspx AddMediaRequest Request Object
 */
final class AddMediaRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Media to add to the account's media library.
     * @var Media[]
     */
    public $Media;
}
