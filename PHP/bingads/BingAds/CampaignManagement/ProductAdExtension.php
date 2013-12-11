<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a product ad extension. The extension identifies a Bing Merchant Center store that contains the products that you want to advertise.Available for members of the Product Ads pilot program.The ProductAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721706(v=msads.90).aspx ProductAdExtension Data Object
 */
final class ProductAdExtension extends AdExtension
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
