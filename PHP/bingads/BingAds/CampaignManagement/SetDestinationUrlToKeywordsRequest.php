<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the destination URL that an ad uses if the specified keyword matches the user's search query.
 * @link http://msdn.microsoft.com/en-us/library/jj643313(v=MSADS.80).aspx SetDestinationUrlToKeywordsRequest Request Object
 */
final class SetDestinationUrlToKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keyword.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of KeywordDestinationUrl objects. Each object specifies the destination URL to use in an ad if the specified keyword matches the user's search query. The list must contain unique keyword identifiers. You can specify a maximum of 1,000 objects.
     * @var KeywordDestinationUrl[]
     */
    public $KeywordDestinationUrls;
}
