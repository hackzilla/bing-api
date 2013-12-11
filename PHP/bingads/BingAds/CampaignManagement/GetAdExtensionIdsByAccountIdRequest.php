<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad extensions from the specified account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj923090(v=MSADS.80).aspx GetAdExtensionIdsByAccountIdRequest Request Object
 */
final class GetAdExtensionIdsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the ad extensions to get.
     * @var long
     */
    public $AccountId;

    /**
     * The types of ad extensions to get from the account. You can specify one or more types. For possible values, see AdExtensionsTypeFilter.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;

    /**
     * A value that filters the extensions based on whether they're associated with a campaign. For possible values, see AssociationFilter.
     * @var AssociationFilter
     */
    public $AssociationFilter;
}
