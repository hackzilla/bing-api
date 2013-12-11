<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the negative site URLs of an ad group.
 * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.90).aspx AdGroupNegativeSites Data Object
 */
final class AdGroupNegativeSites
{
    /**
     * The identifier of the ad group to which the negative site URLs belong.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of URLs of the websites on which you do not want your ads displayed. You can specify a maximum of 2,000 URLs. Each URL must specify the domain name and can specify one subdomain name and a maximum of two directories.
     * @var string[]
     */
    public $NegativeSites;
}
