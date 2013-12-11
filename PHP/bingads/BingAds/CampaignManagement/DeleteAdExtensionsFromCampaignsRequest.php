<?php

namespace BingAds\CampaignManagement;

/**
 * Disassociates one or more ad extensions from one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134377(v=MSADS.80).aspx DeleteAdExtensionsFromCampaignsRequest Request Object
 */
final class DeleteAdExtensionsFromCampaignsRequest
{
    /**
     * The identifier of the account that owns the extensions and campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtensionIdToCampaignIdAssociation objects. You can specify a maximum of 100 objects. Each object identifies a campaign and the extension to disassociate from the campaign.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;
}
