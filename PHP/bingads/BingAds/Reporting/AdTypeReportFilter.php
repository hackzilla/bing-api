<?php

namespace BingAds\Reporting;

/**
 * Defines the ad type values that you can use to filter the report data. These values are also used as column values in reports that include the ad type, such as the ad performance report.
 * @link http://msdn.microsoft.com/en-us/library/cc580687(v=msads.90).aspx AdTypeReportFilter Value Set
 */
final class AdTypeReportFilter
{
    /** The report will include text ads. */
    const Text = 'Text';

    /** The report will include mobile ads. */
    const Mobile = 'Mobile';

    /** Not supported. */
    const Image = 'Image';

    /** Not supported. */
    const Local = 'Local';

    /** Not supported. */
    const RichMedia = 'RichMedia';

    /** The report will contain creative ads that are served by third parties. */
    const ThirdPartyCreative = 'ThirdPartyCreative';

    /** The report will include rich ads. */
    const RichAd = 'RichAd';

    /** The report will include product ads. */
    const Product = 'Product';
}
