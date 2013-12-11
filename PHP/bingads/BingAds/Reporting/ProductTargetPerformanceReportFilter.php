<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the product target performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dn195847(v=msads.80).aspx ProductTargetPerformanceReportFilter Data Object
 */
final class ProductTargetPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}
