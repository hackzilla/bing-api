<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible values for the number of days in which an assist must occur in order for it to be considered an assist.
 * @link http://msdn.microsoft.com/en-us/library/gg985284(v=msads.80).aspx DaysApplicableForConversion Value Set
 */
final class DaysApplicableForConversion
{
    /** The conversion period is seven days. */
    const Seven = 'Seven';

    /** The conversion period is 15 days. */
    const Fifteen = 'Fifteen';

    /** The conversion period is 30 days. */
    const Thirty = 'Thirty';

    /** The conversion period is 45 days. */
    const FortyFive = 'FortyFive';
}
