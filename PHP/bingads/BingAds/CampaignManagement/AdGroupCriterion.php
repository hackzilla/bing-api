<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base class of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.80).aspx AdGroupCriterion Data Object
 */
class AdGroupCriterion
{
    /**
     * The identifier of the ad group to apply the criterion to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The criterion to apply to the ad group. The criterion determines (along with campaign and ad group targets) whether ads in the ad group are served.
     * @var Criterion
     */
    public $Criterion;

    /**
     * The system-generated identifier that identifies this ad group criterion.
     * @var long
     */
    public $Id;

    /**
     * A status value that determines whether to apply the criterion to the ad group.
     * @var AdGroupCriterionStatus
     */
    public $Status;

    /**
     * The type of ad group criterion. For more information, see Remarks.
     * @var string
     */
    public $Type;
}
