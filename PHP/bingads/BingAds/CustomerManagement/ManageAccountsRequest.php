<?php

namespace BingAds\CustomerManagement;

final class ManageAccountsRequest
{
    /**
     * @var string[]
     */
    public $AdvertiserAccountNumbers;

    /**
     * @var string
     */
    public $AgencyCustomerNumber;

    public $EffectiveDate;

    /**
     * @var long
     */
    public $Id;

    /**
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * @var dateTime
     */
    public $LastModifiedDateTime;

    /**
     * @var string
     */
    public $Notes;

    /**
     * @var long
     */
    public $PaymentMethodId;

    /**
     * @var dateTime
     */
    public $RequestDate;

    /**
     * @var string
     */
    public $RequesterContactEmail;

    /**
     * @var string
     */
    public $RequesterContactName;

    /**
     * @var string
     */
    public $RequesterContactPhoneNumber;

    /**
     * @var string
     */
    public $RequesterCustomerNumber;

    public $RequestStatus;

    /**
     * @var string[]
     */
    public $RequestStatusDetails;

    public $RequestType;

    /**
     * @var base64Binary
     */
    public $TimeStamp;
}
