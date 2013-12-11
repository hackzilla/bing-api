<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible roles of a user.
 * @link http://msdn.microsoft.com/en-us/library/ee704157(v=msads.80).aspx UserRole Value Set
 */
final class UserRole
{
    /** A role that allows the user to manage one or more accounts within the user's customer. */
    const AdvertiserCampaignManager = 'AdvertiserCampaignManager';

    /** A role that allows the user to manage all aspects of the customer's data. For example, the user can update customer details, manage accounts and campaigns, and add new users to the customer. */
    const SuperAdmin = 'SuperAdmin';

    /** Reserved for future use. */
    const ClientViewer = 'ClientViewer';

    /** Reserved for future use. */
    const ClientManager = 'ClientManager';

    /** Reserved for future use. */
    const PublisherAdmin = 'PublisherAdmin';

    /** Reserved for future use. */
    const PublisherAccountManager = 'PublisherAccountManager';

    /** Reserved for future use. */
    const PublisherReportUser = 'PublisherReportUser';

    /** Reserved for future use. */
    const PublisherListManager = 'PublisherListManager';

    /** Reserved for future use. */
    const PublisherAdViewer = 'PublisherAdViewer';

    /** Reserved for future use. */
    const ClientAdmin = 'ClientAdmin';
}
