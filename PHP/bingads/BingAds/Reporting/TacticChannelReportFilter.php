<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the tactic and channel report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262855(v=msads.80).aspx TacticChannelReportFilter Data Object
 */
final class TacticChannelReportFilter
{
    /**
     * The report will include data for only the specified channels. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $ChannelIds;

    /**
     * The report will include data for only the specified tactics. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $TacticIds;

    /**
     * The report will include data for only the specified ad groups. The identifiers identify ad groups that you defined on a paid search provider other than Bing Ads. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $ThirdPartyAdGroupIds;

    /**
     * The report will include data for only the specified campaigns. The identifiers identify campaigns that you defined on a paid search provider other than Bing Ads. The list can contain a maximum of 300 campaigns.
     * @var long[]
     */
    public $ThirdPartyCampaignIds;
}
