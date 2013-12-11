<?php

namespace BingAds\Reporting;

/**
 * Defines the date range values of a report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671895(v=msads.90).aspx ReportTime Data Object
 */
final class ReportTime
{
    /**
     * The end date of the custom date range. The end date cannot be later than today's date.
     * @var Date
     */
    public $CustomDateRangeEnd;

    /**
     * The start date of the custom date range. The start date must be earlier than or the same as the end date.
     * @var Date
     */
    public $CustomDateRangeStart;

    /**
     * A predefined date range value. Each report request type specifies the predefined time periods that you can specify for each aggregation type.
     * @var ReportTimePeriod
     */
    public $PredefinedTime;
}
