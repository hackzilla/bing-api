<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionsAssociations service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.90).aspx GetAdExtensionsAssociationsResponse Response Object
 */
final class GetAdExtensionsAssociationsResponse
{
    /**
     * An array of ad extension association collections.
     * @var AdExtensionAssociationCollection[]
     */
    public $AdExtensionAssociationCollection;
}
