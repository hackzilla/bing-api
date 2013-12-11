<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj134376(v=MSADS.80).aspx GetAdExtensionsByIdsRequest Request Object
 */
final class GetAdExtensionsByIdsRequest
{
    /**
     * The identifier of the account that owns the ad extensions.
     * @var long
     */
    public $AccountId;

    /**
     * A list of ad extension identifiers. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdExtensionIds;

    /**
     * The types of ad extensions that the list of identifiers contains.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}
