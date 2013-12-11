<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible percentage values by which you can adjust the base bid. For more information on how to adjust the bid for a satisfied target condition, see Managing Targets.
 * @link http://msdn.microsoft.com/en-us/library/bb671455(v=msads.80).aspx IncrementalBidPercentage Value Set
 */
final class IncrementalBidPercentage
{
    /** Do not Adjust the base bid. */
    const ZeroPercent = 'ZeroPercent';

    /** Adjust the base bid by 10 percent. */
    const TenPercent = 'TenPercent';

    /** Adjust the base bid by 20 percent. */
    const TwentyPercent = 'TwentyPercent';

    /** Adjust the base bid by 30 percent. */
    const ThirtyPercent = 'ThirtyPercent';

    /** Adjust the base bid by 40 percent. */
    const FortyPercent = 'FortyPercent';

    /** Adjust the base bid by 50 percent. */
    const FiftyPercent = 'FiftyPercent';

    /** Adjust the base bid by 60 percent. */
    const SixtyPercent = 'SixtyPercent';

    /** Adjust the base bid by 70 percent. */
    const SeventyPercent = 'SeventyPercent';

    /** Adjust the base bid by 80 percent. */
    const EightyPercent = 'EightyPercent';

    /** Adjust the base bid by 90 percent. */
    const NinetyPercent = 'NinetyPercent';

    /** Adjust the base bid by 100 percent. */
    const OneHundredPercent = 'OneHundredPercent';

    /** Not currently supported. */
    const NegativeTenPercent = 'NegativeTenPercent';

    /** Not currently supported. */
    const NegativeTwentyPercent = 'NegativeTwentyPercent';

    /** Not currently supported. */
    const NegativeThirtyPercent = 'NegativeThirtyPercent';

    /** Not currently supported. */
    const NegativeFortyPercent = 'NegativeFortyPercent';

    /** Not currently supported. */
    const NegativeFiftyPercent = 'NegativeFiftyPercent';

    /** Not currently supported. */
    const NegativeSixtyPercent = 'NegativeSixtyPercent';

    /** Not currently supported. */
    const NegativeSeventyPercent = 'NegativeSeventyPercent';

    /** Not currently supported. */
    const NegativeEightyPercent = 'NegativeEightyPercent';

    /** Not currently supported. */
    const NegativeNinetyPercent = 'NegativeNinetyPercent';

    /** Not currently supported. */
    const NegativeOneHundredPercent = 'NegativeOneHundredPercent';

    /** Not currently supported. */
    const ValueNotSupportedInV8 = 'ValueNotSupportedInV8';
}
