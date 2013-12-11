<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible scale values. The context in which the scale is used determines its meaning.
 * @link http://msdn.microsoft.com/en-us/library/gg670964(v=msads.80).aspx Scale Value Set
 */
final class Scale
{
    /** For impressions, this value indicates that the number of impressions is less than 1 million. For bid density, this value indicates that the density is less than 10 percent. */
    const Minimal = 'Minimal';

    /** For impressions, this value indicates that the number of impressions is in the range of 1 million to less than 2 million. For bid density, this value indicates that the density is in the range of 10 percent to less than 20 percent. */
    const Low = 'Low';

    /** For impressions, this value indicates that the number of impressions is in the range of 2 million to less than 3 million. For bid density, this value indicates that the density is in the range of 20 percent to less than 30 percent. */
    const Medium = 'Medium';

    /** For impressions, this value indicates that the number of impressions is in the range of 3 million to less than 4 million. For bid density, this value indicates that the density is in the range of 30 percent to less than 50 percent. */
    const High = 'High';

    /** For impressions, this value indicates that the number of impressions is 4 million or more. For bid density, this value indicates that the density is 50 percent or more. */
    const VeryHigh = 'VeryHigh';
}
