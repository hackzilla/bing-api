<?php

namespace BingAds\Reporting;

/**
 * Defines the device type values that you can use to filter the report data. These values are also used as column values in reports that include device type information, such as the ad group performance report.
 * @link http://msdn.microsoft.com/en-us/library/gg262850(v=msads.90).aspx DeviceTypeReportFilter Value Set
 */
final class DeviceTypeReportFilter
{
    /** The report will include text ads displayed on computers. */
    const Computer = 'Computer';

    /** The report will include text ads displayed on smartphones (any high fidelity device capable of rendering full HTML). */
    const SmartPhone = 'SmartPhone';

    /** The report will include mobile ads displayed on a mobile device. */
    const NonSmartPhone = 'NonSmartPhone';

    /** The report will include text ads displayed on a tablet device. */
    const Tablet = 'Tablet';
}
