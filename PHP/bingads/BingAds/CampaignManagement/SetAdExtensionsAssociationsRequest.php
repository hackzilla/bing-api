<?php

namespace BingAds\CampaignManagement;

/**
 *  Associates the specified ad extensions with the respective campaigns or ad groups.Currently only site links ad extensions may be associated with ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.90).aspx SetAdExtensionsAssociationsRequest Request Object
 */
final class SetAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions to associate with campaigns or ad groups. You may either specify a list of associations for campaigns, or specify a list of associations for ad groups per service call. Specify the entity type with the AssociationType element.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;

    /**
     * The type of all entities specified in the AdExtensionIdToEntityIdAssociations list.
     * @var AssociationType
     */
    public $AssociationType;
}
