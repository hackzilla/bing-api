<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible values used to filter extensions based on whether they're associated with a campaign.
 * @link http://msdn.microsoft.com/en-us/library/jj923093(v=msads.80).aspx AssociationFilter Value Set
 */
final class AssociationFilter
{
    /** Return all ad extensions in the account. */
    const All = 'All';

    /** Return only those extensions that are associated with one or more campaigns. */
    const Associated = 'Associated';
}
