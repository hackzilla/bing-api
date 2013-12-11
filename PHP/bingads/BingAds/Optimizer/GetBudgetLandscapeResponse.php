<?php

namespace BingAds\Optimizer;

/**
 * Response object for the GetBudgetLandscape service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscapeResponse Response Object
 */
final class GetBudgetLandscapeResponse
{
    /**
     * A list of CampaignBudgetLandscape objects that identify one or more campaigns with suggested budget points.
     * @var CampaignBudgetLandscape[]
     */
    public $CampaignBudgetLandscapes;
}
