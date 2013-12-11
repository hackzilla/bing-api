<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more keywords to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671996(v=MSADS.80).aspx AddKeywordsRequest Request Object
 */
final class AddKeywordsRequest
{
    /**
     * The identifier of the ad group to add the keywords to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of Keyword objects to add to the specified ad group.
     * @var Keyword[]
     */
    public $Keywords;
}
