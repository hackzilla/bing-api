<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the segmentation report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262841(v=msads.80).aspx SegmentationReportFilter Data Object
 */
final class SegmentationReportFilter
{
    /**
     * The report will include data for only the specified age group.
     * @var AgeGroupReportFilter
     */
    public $AgeGroup;

    /**
     * The report will include data for only the specified country/region.
     * @var CountryReportFilter
     */
    public $Country;

    /**
     * The report will include data for only the specified gender.
     * @var GenderReportFilter
     */
    public $Gender;

    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;

    /**
     * The report will include data for only the specified keywords. The list of identifiers can contain a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;
}
