<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible status values of an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728394(v=msads.90).aspx AccountLifeCycleStatus Value Set
 */
final class AccountLifeCycleStatus
{
    /** The account is in a draft state. When you add an account, the system sets the status to Draft. After the system validates the payment instrument, the status changes to Active. You cannot add another account while the customer has an account in the Draft state. */
    const Draft = 'Draft';

    /** The account is active, which means that the account and its campaigns can be managed and its ads served. */
    const Active = 'Active';

    /** The account is inactive, which means that the system deleted the account. */
    const Inactive = 'Inactive';

    /** For internal use only. You may update the account and its campaigns while the account is in the paused state. */
    const Pause = 'Pause';

    /** For internal use only. You may update the account and its campaigns while the account is in the pending state. */
    const Pending = 'Pending';
}
