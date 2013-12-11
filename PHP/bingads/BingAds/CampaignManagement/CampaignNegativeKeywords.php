<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the campaign's list of negative keywords.
 * @link http://msdn.microsoft.com/en-us/library/ee703967(v=msads.80).aspx CampaignNegativeKeywords Data Object
 */
final class CampaignNegativeKeywords
{
    /**
     * The identifier of the campaign that the negative keywords belong to.
     * @var long
     */
    public $CampaignId;

    /**
     * A list of negative keywords that prevent the service from serving an ad if the user's query contains one of the negative keywords.
     * @var string[]
     */
    public $NegativeKeywords;
}
