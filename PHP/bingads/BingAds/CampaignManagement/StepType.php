<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the types of steps that you can specify for a goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985287(v=msads.80).aspx StepType Value Set
 */
final class StepType
{
    /** The first webpage that a user lands on after clicking the ad. A goal can have only one step of this type. */
    const Lead = 'Lead';

    /** A webpage on your website that a user navigates to after landing on your landing page. A goal can contain one or more steps of this type. */
    const Browse = 'Browse';

    /** A webpage that shows the user's intent to complete a transaction. For example, a webpage that gathers the visitors payment information. A goal can have one or more steps of this type. */
    const Prospect = 'Prospect';

    /** The webpage that acknowledges that the conversion, such as a product purchase or account signup, occurred. A goal must include a step of this type, and the goal can have only one conversion step. */
    const Conversion = 'Conversion';
}
