<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that identifies a campaign, one of its ad extensions, and the editorial status of the extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134402(v=msads.80).aspx CampaignAdExtension Data Object
 */
final class CampaignAdExtension
{
    /**
     * An ad extension. Use the Type element to determine the extension's type.
     * @var AdExtension2
     */
    public $AdExtension;

    /**
     * The identifier of the campaign that contains the ad extension.
     * @var long
     */
    public $CampaignId;

    /**
     * The editorial status of the ad extension. The status is determined in the context of the campaign.
     * @var CampaignAdExtensionEditorialStatus
     */
    public $EditorialStatus;
}
