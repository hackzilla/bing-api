<?php

namespace BingAds\CampaignManagement;

/**
 * Associates one or more ad extensions with one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134390(v=MSADS.80).aspx SetAdExtensionsToCampaignsRequest Request Object
 */
final class SetAdExtensionsToCampaignsRequest
{
    /**
     * The identifier of the account that owns the campaigns and ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtensionIdToCampaignIdAssociation objects. Each object associates an ad extension with a campaign. You can specify a maximum of 100 associations.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;
}
