<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more ad extensions within an account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.90).aspx UpdateAdExtensionsRequest Request Object
 */
final class UpdateAdExtensionsRequest
{
    /**
     * The identifier of the account which contains the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The list of ad extensions of any type, to update within the account. You may specify a maximum of 100 extensions per call.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
