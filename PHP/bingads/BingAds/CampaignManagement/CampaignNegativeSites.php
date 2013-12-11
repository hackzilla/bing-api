<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the negative site URLs of a campaign.
 * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.80).aspx CampaignNegativeSites Data Object
 */
final class CampaignNegativeSites
{
    /**
     * The identifier of the campaign to which the negative site URLs belong.
     * @var long
     */
    public $CampaignId;

    /**
     * A list of URLs of the websites on which you do not want your ads displayed. You can specify a maximum of 2,000 URLs. Each URL must specify the domain name, and can specify one subdomain name and a maximum of two directories.
     * @var string[]
     */
    public $NegativeSites;
}
