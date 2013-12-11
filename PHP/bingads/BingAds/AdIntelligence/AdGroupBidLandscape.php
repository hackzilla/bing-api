<?php

namespace BingAds\AdIntelligence;

final class AdGroupBidLandscape
{
    /**
     * @var long
     */
    public $AdGroupId;

    public $AdGroupBidLandscapeType;

    /**
     * @var DayMonthAndYear
     */
    public $StartDate;

    /**
     * @var DayMonthAndYear
     */
    public $EndDate;

    public $BidLandscapePoints;
}
