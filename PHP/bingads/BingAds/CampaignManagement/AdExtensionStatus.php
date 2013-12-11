<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.90).aspx AdExtensionStatus Value Set
 */
final class AdExtensionStatus
{
    /** The ad extension is active. You can associate an active ad extension with a campaign or ad group. */
    const Active = 'Active';

    /** The ad extension is deleted. This status is for internal use only. The Get operations will not include deleted extensions. */
    const Deleted = 'Deleted';
}
