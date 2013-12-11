<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionIdsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj923090(v=MSADS.80).aspx GetAdExtensionIdsByAccountIdResponse Response Object
 */
final class GetAdExtensionIdsByAccountIdResponse
{
    /**
     * A list of ad extension IDs. To get the extension, call the GetAdExtensionsByIds operation.
     * @var long[]
     */
    public $AdExtensionIds;
}
