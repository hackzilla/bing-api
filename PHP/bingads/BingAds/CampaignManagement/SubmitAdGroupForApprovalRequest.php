<?php

namespace BingAds\CampaignManagement;

/**
 * Submits an ad group for editorial review.
 * @link http://msdn.microsoft.com/en-us/library/dn277516(v=msads.90).aspx SubmitAdGroupForApprovalRequest Request Object
 */
final class SubmitAdGroupForApprovalRequest
{
    /**
     * The identifier of the ad group that is being submitted for editorial review.
     * @var long
     */
    public $AdGroupId;
}
