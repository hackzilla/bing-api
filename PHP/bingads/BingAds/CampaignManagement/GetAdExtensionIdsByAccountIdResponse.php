<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionIdsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.90).aspx GetAdExtensionIdsByAccountIdResponse Response Object
 */
final class GetAdExtensionIdsByAccountIdResponse
{
    /**
     * A list of ad extension IDs. To get the extension, call the GetAdExtensionsByIds operation.
     * @var long[]
     */
    public $AdExtensionIds;
}
