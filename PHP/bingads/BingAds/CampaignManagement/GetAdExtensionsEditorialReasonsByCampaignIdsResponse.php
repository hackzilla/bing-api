<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionsEditorialReasonsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134401(v=MSADS.80).aspx GetAdExtensionsEditorialReasonsByCampaignIdsResponse Response Object
 */
final class GetAdExtensionsEditorialReasonsByCampaignIdsResponse
{
    /**
     * A collection of ad extensions that failed editorial review and the reason for the failure.
     * @var AdExtensionEditorialReasonCollection[]
     */
    public $EditorialReasons;
}
