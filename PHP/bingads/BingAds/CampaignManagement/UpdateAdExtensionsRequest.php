<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more ad extensions within an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn151774(v=MSADS.80).aspx UpdateAdExtensionsRequest Request Object
 */
final class UpdateAdExtensionsRequest
{
    /**
     * The identifier of the account which contains the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions (of any type) to update within the account. You can specify a maximum of 100 extensions per call.
     * @var AdExtension2[]
     */
    public $AdExtensions;
}
