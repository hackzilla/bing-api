<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the type of ad rotation to apply to the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/jj219951(v=MSADS.80).aspx SetAdRotationToAdGroupsRequest Request Object
 */
final class SetAdRotationToAdGroupsRequest
{
    /**
     * An array of AdGroupAdRotation objects. Each object identifies an ad group and the type of ad rotation to apply to it. The list must contain unique ad group IDs. The maximum number of objects that you can specify is 1,000.
     * @var AdGroupAdRotation[]
     */
    public $AdGroupAdRotations;

    /**
     * The identifier of the campaign that owns the specified ad groups.
     * @var long
     */
    public $CampaignId;
}
