<?php

namespace BingAds\CampaignManagement;

/**
 * Delete one or more ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/jj134404(v=MSADS.80).aspx DeleteAdExtensionsRequest Request Object
 */
final class DeleteAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the extensions to delete. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdExtensionIds;
}
