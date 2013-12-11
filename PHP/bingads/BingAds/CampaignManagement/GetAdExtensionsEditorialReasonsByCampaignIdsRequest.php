<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified ad extensions failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/jj134401(v=MSADS.80).aspx GetAdExtensionsEditorialReasonsByCampaignIdsRequest Request Object
 */
final class GetAdExtensionsEditorialReasonsByCampaignIdsRequest
{
    /**
     * The identifier of the account that owns the ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of ad extension to campaign associations. You can specify a maximum of 100 associations.
     * @var AdExtensionIdToCampaignIdAssociation[]
     */
    public $AdExtensionIdToCampaignIdAssociations;

    /**
     * The type of ad extensions specified in the list of ad extension to campaign associations.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}
