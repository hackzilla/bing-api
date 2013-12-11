<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the keywords within a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywordsRequest Request Object
 */
final class UpdateKeywordsRequest
{
    /**
     * The identifier of the ad group whose keywords will be updated.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of Keyword objects that contains the updated keyword information. The Id element of each of these objects identifies the keyword to update.
     * @var Keyword[]
     */
    public $Keywords;
}
