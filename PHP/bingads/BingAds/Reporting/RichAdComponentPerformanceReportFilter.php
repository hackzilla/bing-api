<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the rich ad component keyword performance report data.
 * @link http://msdn.microsoft.com/en-us/library/hh180147(v=msads.90).aspx RichAdComponentPerformanceReportFilter Data Object
 */
final class RichAdComponentPerformanceReportFilter
{
    /**
     * The report will include data for only the specified components. For example, you may use the filter to include data for only deep links and video.
     * @var ComponentTypeFilter
     */
    public $ComponentType;

    /**
     * The report will include data for only the specified rich ad types. For example, you can use the filter to include data for only rich ads that include two images and four links.
     * @var RichAdSubTypeFilter
     */
    public $RichAdSubType;
}
