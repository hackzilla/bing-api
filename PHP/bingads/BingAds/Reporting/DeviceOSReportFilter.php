<?php

namespace BingAds\Reporting;

/**
 * Defines the device operating system values that you can use to filter the report data.
 * @link http://msdn.microsoft.com/en-us/library/dn411633(v=msads.90).aspx DeviceOSReportFilter Value Set
 */
final class DeviceOSReportFilter
{
    /** The report will include ads displayed on a device operating system other than Android, BlackBerry, iOS, and Windows. */
    const Other = 'Other';

    /** The report will include ads displayed on Windows device operating systems. */
    const Windows = 'Windows';

    /** The report will include ads displayed on iOS device operating systems. */
    const iOS = 'iOS';

    /** The report will include ads displayed on Android device operating systems. */
    const Android = 'Android';

    /** The report will include ads displayed on BlackBerry device operating systems. */
    const BlackBerry = 'BlackBerry';
}
