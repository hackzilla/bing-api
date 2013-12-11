<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a collection of ad extensions that are associated with a campaign.
 * @link http://msdn.microsoft.com/en-us/library/jj134383(v=msads.80).aspx CampaignAdExtensionCollection Data Object
 */
final class CampaignAdExtensionCollection
{
    /**
     * A list of CampaignAdExtension objects. Each object identifies the campaign, the ad extension associated with it, and the extension's editorial status.
     * @var CampaignAdExtension[]
     */
    public $CampaignAdExtensions;
}
