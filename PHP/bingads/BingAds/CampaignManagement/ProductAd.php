<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a product ad.
 * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.80).aspx ProductAd Data Object
 */
final class ProductAd extends Ad
{
    /**
     * The promotional text to display in a product ad. The text can contain a maximum of 45 characters. If you do not want to add promotional text to the product ads, set PromotionalText to null or an empty string.
     * @var string
     */
    public $PromotionalText;
}
