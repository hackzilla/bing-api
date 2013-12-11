<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an association between a campaign and an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134375(v=msads.80).aspx AdExtensionIdToCampaignIdAssociation Data Object
 */
final class AdExtensionIdToCampaignIdAssociation
{
    /**
     * The identifier of the ad extension to associate with the campaign.
     * @var long
     */
    public $AdExtensionId;

    /**
     * The identifier of the campaign to associate with the ad extension.
     * @var long
     */
    public $CampaignId;
}
