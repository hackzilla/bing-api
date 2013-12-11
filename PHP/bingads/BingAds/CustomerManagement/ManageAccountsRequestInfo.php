<?php

namespace BingAds\CustomerManagement;

final class ManageAccountsRequestInfo
{
    /**
     * @var string[]
     */
    public $AdvertiserAccountNumbers;

    /**
     * @var string
     */
    public $AgencyCustomerNumber;

    /**
     * @var dateTime
     */
    public $RequestDate;

    public $EffectiveDate;

    /**
     * @var long
     */
    public $Id;

    public $Status;
}
