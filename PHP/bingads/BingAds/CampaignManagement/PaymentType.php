<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the payment types accepted by a business.
 * @link http://msdn.microsoft.com/en-us/library/dd797189(v=msads.80).aspx PaymentType Value Set
 */
final class PaymentType
{
    /** The business accepts cash payments. */
    const Cash = 'Cash';

    /** The business accepts American Express cards. */
    const AmericanExpress = 'AmericanExpress';

    /** The business accepts MasterCard cards. */
    const MasterCard = 'MasterCard';

    /** The business accepts Diners Club cards. */
    const DinersClub = 'DinersClub';

    /** The business accepts direct debit payments. */
    const DirectDebit = 'DirectDebit';

    const Visa = 'Visa';

    /** The business accepts traveler's checks. */
    const TravellersCheck = 'TravellersCheck';

    /** The business accepts payments through PayPal. */
    const PayPal = 'PayPal';

    /** The business accepts direct invoices. */
    const Invoice = 'Invoice';

    /** The business accepts cash on delivery payments. */
    const CashOnDelivery = 'CashOnDelivery';

    /** Other payment types. The other payment types are contained in the OtherPaymentTypeDesc element of the Business data object. */
    const Other = 'Other';
}
