<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible costs associated with the conversion that you want to track.
 * @link http://msdn.microsoft.com/en-us/library/gg985292(v=msads.80).aspx CostModel Value Set
 */
final class CostModel
{
    /** There are no costs associated with the conversion to capture. */
    const None = 'None';

    /** Capture non-advertising costs associated with the conversion. */
    const NonAdvertising = 'NonAdvertising';

    /** Capture the sales tax associated with the conversion. */
    const Taxed = 'Taxed';

    /** Capture the shipping fees associated with the conversion. */
    const Shipped = 'Shipped';
}
