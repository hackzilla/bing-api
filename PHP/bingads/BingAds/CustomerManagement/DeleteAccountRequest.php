<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes an account.After deleting the account it will be searchable and show as inactive in the Bing Ads web application. You may or may not choose to surface inactive accounts in your application.
 * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccountRequest Request Object
 */
final class DeleteAccountRequest
{
    /**
     * The identifier of the account to delete.
     * @var long
     */
    public $AccountId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetAccount operation to get the time-stamp value. The delete operation fails if the account object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}
