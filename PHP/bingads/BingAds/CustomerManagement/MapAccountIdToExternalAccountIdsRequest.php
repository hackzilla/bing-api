<?php

namespace BingAds\CustomerManagement;

final class MapAccountIdToExternalAccountIdsRequest
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string[]
     */
    public $ExternalAccountIds;
}
