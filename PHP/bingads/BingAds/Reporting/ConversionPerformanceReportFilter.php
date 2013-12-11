<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the conversion performance report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262849(v=msads.80).aspx ConversionPerformanceReportFilter Data Object
 */
final class ConversionPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data only for text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;
}
