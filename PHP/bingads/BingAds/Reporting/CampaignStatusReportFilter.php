<?php

namespace BingAds\Reporting;

/**
 * Defines the campaign status values that you can use to filter the report data. These values are also used as column values in reports that include campaign status, such as the campaign performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.90).aspx CampaignStatusReportFilter Value Set
 */
final class CampaignStatusReportFilter
{
    /** The same meaning as Active. This value is maintained for backward compatibility; however, you should use Active instead. */
    const Submitted = 'Submitted';

    /** The report will contain campaigns that have been canceled. */
    const Cancelled = 'Cancelled';

    /** The report will contain campaigns that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will contain campaigns that are paused. */
    const Paused = 'Paused';

    /** The report will contain campaigns that are paused due to budget restrictions. */
    const BudgetPaused = 'BudgetPaused';

    /** The report will contain campaigns that are active. */
    const Active = 'Active';
}
