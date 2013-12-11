<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies the destination URL to use in an ad if the specified keyword matches the user's search query.
 * @link http://msdn.microsoft.com/en-us/library/jj643315(v=msads.80).aspx KeywordDestinationUrl Data Object
 */
final class KeywordDestinationUrl
{
    /**
     * The destination URL to use in an ad if the specified keyword matches the user's search query. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The identifier of the keyword.
     * @var long
     */
    public $KeywordId;
}
