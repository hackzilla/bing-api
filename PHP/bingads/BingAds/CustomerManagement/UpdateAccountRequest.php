<?php

namespace BingAds\CustomerManagement;

/**
 * Updates the details of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/ee729181(v=MSADS.80).aspx UpdateAccountRequest Request Object
 */
final class UpdateAccountRequest
{
    /**
     * An AdvertiserAccount or PublisherAccount object that contains the updated account information.
     * @var Account
     */
    public $Account;
}
