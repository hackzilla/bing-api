<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible payment methods of an account.
 * @link http://msdn.microsoft.com/en-us/library/ee704164(v=msads.80).aspx PaymentMethodType Value Set
 */
final class PaymentMethodType
{
    /** The payments are made with a credit card. */
    const CreditCard = 'CreditCard';

    /** An invoice is sent to the customer requesting payment. */
    const Invoice = 'Invoice';

    /** The payments are made with a check. Not supported. */
    const Check = 'Check';

    /** The payments are made with an electronic funds transfer. Not supported. */
    const ElectronicFundsTransfer = 'ElectronicFundsTransfer';
}
