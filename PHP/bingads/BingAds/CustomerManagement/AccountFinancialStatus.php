<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible financial status values of an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728399(v=msads.90).aspx AccountFinancialStatus Value Set
 */
final class AccountFinancialStatus
{
    /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
    const Proposed = 'Proposed';

    /** Not used. */
    const PendingCreditCheck = 'PendingCreditCheck';

    /** The account is in good standing. */
    const ClearFinancialStatus = 'ClearFinancialStatus';

    /** Not used. */
    const SoldToOnly = 'SoldToOnly';

    /** Not used. */
    const CreditWarning = 'CreditWarning';

    /** For an advertiser account, this status indicates that the account is past due. The service will not deliver the account's ads until the account is settled. For a credit card account, this status indicates that the card has been declined three times. */
    const Hold = 'Hold';

    /** The account is past due; however, collection is no longer being pursued. When this status is set, the Status element of Account data object will be set to Inactive. */
    const WriteOff = 'WriteOff';

    /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. The service continues to deliver the account's ads. */
    const TaxOnHold = 'TaxOnHold';

    /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. The service continues to deliver the account's ads. */
    const UserHold = 'UserHold';
}
