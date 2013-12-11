<?php

namespace BingAds\Notification;

/**
 * Defines the possible types of notifications that you can request.
 * @link http://msdn.microsoft.com/en-us/library/hh211519(v=msads.80).aspx NotificationType Value Set
 */
final class NotificationType
{
    /** Request notification about credit cards that are about to expire. This notification occurs 15 days prior to expiration and again one day prior to expiration. */
    const CreditCardPendingExpiration = 'CreditCardPendingExpiration';

    /** Request notification about campaigns whose budget balance has reached 0 (zero). */
    const DepletedBudget = 'DepletedBudget';

    /** Request notification about accounts that have ads and keywords that failed editorial review. Editorial rejection notifications are generated once a day. The timing of when the notifications are generated is undetermined. */
    const EditorialRejection = 'EditorialRejection';

    /** Request notification about credit cards that expired. This notification occurs one day after the card expires. Because credit cards expire at the end of the month, this notification is sent the first day of the month for cards that expired at the end of the previous month. To get notification about when a card is about to expire, see CreditCardPendingExpiration. */
    const ExpiredCreditCard = 'ExpiredCreditCard';

    /** Request notification about insertion orders that expired. */
    const ExpiredInsertionOrder = 'ExpiredInsertionOrder';

    /** Request notification about campaigns whose budget balance is running low. */
    const LowBudgetBalance = 'LowBudgetBalance';
}
