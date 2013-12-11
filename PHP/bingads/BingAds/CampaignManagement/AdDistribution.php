<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the ad distribution for the ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.80).aspx AdDistribution Value Set
 */
final class AdDistribution
{
    /** The ad group contains search ads. The ads are displayed on the search network that you specify for the ad group. For more information, see the Network element of AdGroup. */
    const Search = 'Search';

    /** The ad group contains content ads. The text ads are displayed on Microsoft-owned websites, as well as on participating partner websites. */
    const Content = 'Content';
}
