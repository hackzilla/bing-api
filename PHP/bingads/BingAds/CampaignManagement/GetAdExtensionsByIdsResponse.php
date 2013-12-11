<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134376(v=MSADS.80).aspx GetAdExtensionsByIdsResponse Response Object
 */
final class GetAdExtensionsByIdsResponse
{
    /**
     * A list of AdExtension2 objects. The list corresponds directly to the list of identifiers in the request. If an ad extension ID in the request is not valid or the extension is not of the type specified, the corresponding item in this list is null.
     * @var AdExtension2[]
     */
    public $AdExtensions;
}
