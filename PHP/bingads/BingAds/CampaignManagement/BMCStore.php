<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a Bing Merchant Center store.Elements of this object are defined in the Bing Merchant Center store, and read-only in Bing Ads. Values of elements do not restrict Bing Ads features. For example, a product ad extension may be added whether the IsActive element is set to true or false.
 * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.90).aspx BMCStore Data Object
 */
final class BMCStore
{
    /**
     * Value will be true if the store has a catalog of items, and otherwise the value is false.
     * @var boolean
     */
    public $HasCatalog;

    /**
     * The unique identifier for the Bing Merchant Center store.
     * @var long
     */
    public $Id;

    /**
     * Value will be true if the store is active, and otherwise the value is false.
     * @var boolean
     */
    public $IsActive;

    /**
     * Value will be true if the store is enabled for product ads in Bing Ads, and otherwise the value is false.
     * @var boolean
     */
    public $IsProductAdsEnabled;

    /**
     * Defines the name of the store as defined in the Bing Merchant Center.
     * @var string
     */
    public $Name;
}
