<?php

namespace BingAds\CampaignManagement;

/**
 * Available for members of the Product Ads pilot program.
 * @link http://msdn.microsoft.com/en-us/library/jj721706(v=msads.80).aspx ProductAdExtension Data Object
 */
final class ProductAdExtension extends AdExtension2
{
    /**
     * The display name of the extension. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * The list of products from the Bing Merchant Center store to advertise.
     * @var ProductConditionCollection[]
     */
    public $ProductSelection;

    /**
     * The identifier of the Bing Merchant Center store contains the products to advertise.
     * @var long
     */
    public $StoreId;

    /**
     * The name of the store that StoreId identifies.
     * @var string
     */
    public $StoreName;
}
