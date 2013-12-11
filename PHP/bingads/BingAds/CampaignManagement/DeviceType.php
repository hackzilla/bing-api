<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible device types to target your ads.
 * @link http://msdn.microsoft.com/en-us/library/ff728479(v=msads.80).aspx DeviceType Value Set
 */
final class DeviceType
{
    /** Target ads to smartphones, and specifically any high fidelity mobile device capable of rendering full HTML. */
    const Smartphones = 'Smartphones';

    /** Target ads to computers. */
    const Computers = 'Computers';
}
