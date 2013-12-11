<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134406(v=MSADS.80).aspx AddAdExtensionsResponse Response Object
 */
final class AddAdExtensionsResponse
{
    /**
     * The identities of the extensions that were added. The list corresponds directly to the list of extensions specified in the request.
     * @var AdExtensionIdentity[]
     */
    public $AdExtensionIdentities;
}
