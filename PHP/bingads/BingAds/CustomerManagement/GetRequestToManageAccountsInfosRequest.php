<?php

namespace BingAds\CustomerManagement;

final class GetRequestToManageAccountsInfosRequest
{
    /**
     * @var string
     */
    public $AccountNumber;

    /**
     * @var string
     */
    public $CustomerNumber;

    /**
     * @var dateTime
     */
    public $RequestsSentAfter;

    /**
     * @var dateTime
     */
    public $RequestsSentBefore;

    public $RequestStatusFilter;

    public $RequestTypeFilter;
}
