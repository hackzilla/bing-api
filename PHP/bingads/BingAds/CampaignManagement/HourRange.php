<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the time ranges that you can specify for time of the day targeting.
 * @link http://msdn.microsoft.com/en-us/library/bb672093(v=msads.90).aspx HourRange Value Set
 */
final class HourRange
{
    /** Hours from 3:00 A.M. through 7:00 A.M. */
    const ThreeAMToSevenAM = 'ThreeAMToSevenAM';

    /** Hours from 7:00 A.M. through 11:00 A.M. */
    const SevenAMToElevenAM = 'SevenAMToElevenAM';

    /** Hours from 11:00 A.M. through 2:00 P.M. */
    const ElevenAMToTwoPM = 'ElevenAMToTwoPM';

    /** Hours from 2:00 P.M. through 6:00 P.M. */
    const TwoPMToSixPM = 'TwoPMToSixPM';

    /** Hours from 6:00 P.M. through 11:00 P.M. */
    const SixPMToElevenPM = 'SixPMToElevenPM';

    /** Hours from 11:00 P.M. through 3:00 A.M. */
    const ElevenPMToThreeAM = 'ElevenPMToThreeAM';
}
