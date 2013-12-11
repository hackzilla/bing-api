<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible financial status values of a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728435(v=msads.90).aspx CustomerFinancialStatus Value Set
 */
final class CustomerFinancialStatus
{
    /** Not used. */
    const ProposalsOnly = 'ProposalsOnly';

    /** The customer is undergoing a credit check as part of the customer sign-up process. The service will not deliver the customer's ads until the credit check is complete. This status applies only to premium customers. */
    const PendingCreditCheck = 'PendingCreditCheck';

    /** The customer is in good standing. */
    const ClearFinancialStatus = 'ClearFinancialStatus';

    /** The customer is considered to be a credit risk. You cannot set the BillToCustomerId element of the Account data object to a customer that has this status. This status applies only to premium customers. */
    const SoldToOnly = 'SoldToOnly';

    /** One of the customer's accounts is past due. */
    const CreditHold = 'CreditHold';

    /** Not used. */
    const CreditWarning = 'CreditWarning';
}
