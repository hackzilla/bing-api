<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the type of ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.90).aspx AdType Value Set
 */
final class AdType
{
    /** The ad is a text ad. For more information, see TextAd Data Object. */
    const Text = 'Text';

    /** Not used. */
    const Image = 'Image';

    /** The ad is a mobile ad. For more information, see MobileAd Data Object. */
    const Mobile = 'Mobile';

    /** Not used. */
    const RichSearch = 'RichSearch';

    /** The ad is a product ad. For more information, see ProductAd Data Object. */
    const Product = 'Product';
}
