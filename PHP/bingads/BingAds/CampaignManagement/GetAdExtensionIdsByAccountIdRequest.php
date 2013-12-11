<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.90).aspx GetAdExtensionIdsByAccountIdRequest Request Object
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
     * A value that filters the extensions based on whether they're associated with a specific entity type. For possible values, see AssociationType.
     * @var AssociationType
     */
    public $AssociationType;
}
