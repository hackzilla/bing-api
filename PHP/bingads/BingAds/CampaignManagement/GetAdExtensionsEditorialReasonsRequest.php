<?php

namespace BingAds\CampaignManagement;

/**
 * Gets editorial rejection reasons for the respective ad extension and entity associations.
 * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.90).aspx GetAdExtensionsEditorialReasonsRequest Request Object
 */
final class GetAdExtensionsEditorialReasonsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions and corresponding entity associations to get.
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;

    /**
     * Filters the returned associations by entity type.
     * @var AssociationType
     */
    public $AssociationType;
}
