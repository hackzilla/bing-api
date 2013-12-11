<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ad extensions from the account's ad extension library.
 * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.90).aspx DeleteAdExtensionsRequest Request Object
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
