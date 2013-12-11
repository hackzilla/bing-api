<?php

namespace BingAds\Optimizer;

/**
 * Defines the possible values of a campaign budget point.
 * @link http://msdn.microsoft.com/en-us/library/dn434661(v=msads.90).aspx BudgetPointType Value Set
 */
final class BudgetPointType
{
    /** The budget point includes the current budget. */
    const Current = 'Current';

    /** The budget point includes the optimal suggested budget. The proposed budget is estimated to yield the optimal ratio of increased clicks to minimal budget increase. */
    const Suggested = 'Suggested';

    /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
    const Maximum = 'Maximum';

    /** The budget point includes a proposed budget other than current, maximum, or suggested. */
    const Other = 'Other';
}
