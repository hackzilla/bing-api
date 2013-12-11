<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an advertiser account.
 * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.80).aspx AdvertiserAccount Data Object
 */
final class AdvertiserAccount extends Account
{
    /**
     * The name of the person to contact regarding this account. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $AgencyContactName;

    /**
     * The identifier of the agency that manages an account on behalf of the owner of that account.
     * @var long
     */
    public $AgencyCustomerId;

    /**
     * The identifier of the third party that is responsible for a sales lead.
     * @var long
     */
    public $SalesHouseCustomerId;

    /**
     * For internal use only.
     * @var string
     */
    public $TaxId;

    /**
     * For internal use only.
     */
    public $TaxType;
}
