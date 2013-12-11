<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible ad rotation types that you can apply to an ad group. For ad groups with more than one ad, these options determine how the ads are rotated into the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.90).aspx AdRotationType Value Set
 */
final class AdRotationType
{
    /** Favor the best performing ads. */
    const OptimizeForClicks = 'OptimizeForClicks';

    /** Rotate ads evenly into the auction. */
    const RotateAdsEvenly = 'RotateAdsEvenly';
}
