<?php

namespace BingAds\CampaignManagement;

/**
 * Defines values that determine whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value.
 * @link http://msdn.microsoft.com/en-us/library/gg985274(v=msads.80).aspx RevenueModelType Value Set
 */
final class RevenueModelType
{
    /** The conversion involves a financial transaction with a constant revenue value. */
    const Constant = 'Constant';

    /** The conversion involves a financial transaction but the revenue value may be different for each conversion. */
    const Variable = 'Variable';

    /** The conversion does not involve a financial transaction. For example, you would specify this model in the case where a user completes a survey. */
    const None = 'None';
}
