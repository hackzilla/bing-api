<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible ad extension types.
 * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.90).aspx AdExtensionsTypeFilter Value Set
 */
final class AdExtensionsTypeFilter
{
    /** An ad extension that contains one or more site links to include in an ad. For more information, see SiteLinksAdExtension Data Object. */
    const SiteLinksAdExtension = 'SiteLinksAdExtension';

    /** An ad extension that contains the address and phone number of the business to include an ad. For more information, see LocationAdExtension Data Object. */
    const LocationAdExtension = 'LocationAdExtension';

    /** An ad extension that contains a phone number to include in the ad and whether it's the only clickable item in an ad. For more information, see CallAdExtension Data Object. */
    const CallAdExtension = 'CallAdExtension';

    /** An ad extension that identifies a Bing Merchant Center store that contains the products that you want to advertise. The delivery engine generates the ad's contents based on the product details that it finds in the Bing Merchant Center store. For more information, see ProductAdExtension Data Object. */
    const ProductsAdExtension = 'ProductsAdExtension';
}
